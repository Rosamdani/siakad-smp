<?php

namespace App\Console\Commands;

use App\Enums\Roles;
use Illuminate\Console\Command;

class SyncRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronize roles defined in the Roles enum with the database.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Synchronizing roles...');

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        collect(Roles::cases())->each(function (Roles $role) {
            \Spatie\Permission\Models\Role::updateOrCreate([
                'name' => $role->value,
            ]);
        });

        $allPermissions = \Spatie\Permission\Models\Permission::all();

        $superadminRole = \Spatie\Permission\Models\Role::findByName(Roles::ADMIN->value);

        $superadminRole->syncPermissions($allPermissions);

        $this->info('Roles synchronized successfully.');
    }
}

<?php

namespace App\Console\Commands;

use App\Enums\Roles;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

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

        $defaultPanelId = \Filament\Facades\Filament::getPanel('admin')->getId();

        Artisan::call('shield:generate', [
            '--all' => true,
            '--option' => 'permissions',
            '--panel' => $defaultPanelId,
        ]);

        collect(Roles::cases())->each(function (Roles $role) {
            \Spatie\Permission\Models\Role::updateOrCreate([
                'name' => $role->value,
                'guard_name' => 'web',
            ]);
        });

        $allPermissions = \Spatie\Permission\Models\Permission::all();

        $adminRole = \Spatie\Permission\Models\Role::findByName(Roles::ADMIN->value);

        $adminRole->syncPermissions($allPermissions);

        $this->info('Roles synchronized successfully.');
    }
}

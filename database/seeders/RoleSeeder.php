<?php

namespace Database\Seeders;

use App\Enums\Roles;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        collect(Roles::cases())->each(function (Roles $role) {
            \Spatie\Permission\Models\Role::updateOrCreate([
                'name' => $role->value,
                'guard_name' => 'web',
            ]);
        });

        $allPermissions = \Spatie\Permission\Models\Permission::all();
        $adminRole = \Spatie\Permission\Models\Role::findByName(Roles::ADMIN->value);
        $adminRole->syncPermissions($allPermissions);
    }
}

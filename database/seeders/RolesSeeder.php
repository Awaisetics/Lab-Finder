<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Creating Roles
        $admin = Role::create(['name' => 'admin']);
        $laboratory = Role::create(['name' => 'laboratory']);
        $user = Role::create(['name' => 'user']);
        $employee = Role::create(['name' => 'employee']);
    }
}

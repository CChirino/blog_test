<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Admin']);
        $periodista = Role::create(['name' => 'Redactor']);

        $permission = Permission::create(['name' => 'posts.index'])->syncRoles([$admin, $periodista]);
        $permission = Permission::create(['name' => 'posts.show'])->syncRoles([$admin, $periodista]);
        $permission = Permission::create(['name' => 'posts.create'])->syncRoles([$admin, $periodista]);
        $permission = Permission::create(['name' => 'posts.edit'])->syncRoles([$admin, $periodista]);
        $permission = Permission::create(['name' => 'posts.destroy'])->syncRoles([$admin, $periodista]);

        $permission = Permission::create(['name' => 'categories.index'])->syncRoles([$admin]);
        $permission = Permission::create(['name' => 'categories.show'])->syncRoles([$admin]);
        $permission = Permission::create(['name' => 'categories.create'])->syncRoles([$admin]);
        $permission = Permission::create(['name' => 'categories.edit'])->syncRoles([$admin]);
        $permission = Permission::create(['name' => 'categories.destroy'])->syncRoles([$admin]);


    }
}

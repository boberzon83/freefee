<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles
        $admin = Role::create(['name' => 'administrador']);
        $company = Role::create(['name' => 'empresa']);
        $seller = Role::create(['name' => 'comercial']);
        $customer = Role::create(['name' => 'cliente']);

        //Permisos y asignación de roles
        
            //Dashboard
            Permission::create(['name' => 'dashboard1'])->syncRoles([$admin]);
            Permission::create(['name' => 'dashboard2'])->syncRoles([$company]);
            Permission::create(['name' => 'dashboard4'])->syncRoles([$seller]);
            Permission::create(['name' => 'dashboard5'])->syncRoles([$customer]);

            //Administración
            Permission::create(['name' => 'admin'])->syncRoles([$admin]);
            Permission::create(['name' => 'company'])->syncRoles([$company]);
            Permission::create(['name' => 'seller'])->syncRoles([$seller]);
            Permission::create(['name' => 'customer'])->syncRoles([$customer]);

            //Roles
            Permission::create(['name' => 'role.index'])->syncRoles([$admin]);
            Permission::create(['name' => 'role.disabled'])->syncRoles([$admin]);
            Permission::create(['name' => 'role.create'])->syncRoles([$admin]);
            Permission::create(['name' => 'role.store'])->syncRoles([$admin]);
            Permission::create(['name' => 'role.show'])->syncRoles([$admin]);
            Permission::create(['name' => 'role.edit'])->syncRoles([$admin]);
            Permission::create(['name' => 'role.update'])->syncRoles([$admin]);
            Permission::create(['name' => 'role.destroy'])->syncRoles([$admin]);

            //Usuarios
            Permission::create(['name' => 'user.index'])->syncRoles([$admin,$company]);
            Permission::create(['name' => 'user.deleted'])->syncRoles([$admin,$company]);
            Permission::create(['name' => 'user.create'])->syncRoles([$admin,$company]);
            Permission::create(['name' => 'user.store'])->syncRoles([$admin,$company]);
            Permission::create(['name' => 'user.show'])->syncRoles([$admin,$company]);
            Permission::create(['name' => 'user.edit'])->syncRoles([$admin,$company]);
            Permission::create(['name' => 'user.update'])->syncRoles([$admin,$company]);
            Permission::create(['name' => 'user.destroy'])->syncRoles([$admin,$company]);
            Permission::create(['name' => 'user.active'])->syncRoles([$admin,$company]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = Role::create(['name' => 'administrador']);
        $permissionAdmin = Permission::create(['name' => 'administrar-productos']);
        $roleAdmin->givePermissionTo($permissionAdmin);

        $roleCliente = Role::create(['name' => 'cliente']);
        $permissionCliente = Permission::create(['name' => 'comprar-productos']);
        $roleCliente->givePermissionTo($permissionCliente);

        $user = User::create([
            'name' => 'Julian Daza',
            'email' => 'julian@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($roleAdmin);


        $user = User::create([
            'name' => 'Carlos Mario',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($roleCliente);

        $user = User::create([
            'name' => 'Jesus Alberto ',
            'email' => 'jesus@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($roleCliente);

        $user = User::create([
            'name' => 'Milena Tobon ',
            'email' => 'milena@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($roleCliente);
    }
}

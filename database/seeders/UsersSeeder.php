<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Roberto Carlos',
            'email' => 'robertocarlosmn83@gmail.com',
            'dob' => now(),
            'status' => 1,
            'password' => Hash::make('2024freefee*'),
        ])->assignRole('administrador');

        User::create([
            'name' => 'Manuel',
            'email' => 'mmejiasnaranjo@gmail.com',
            'dob' => now(),
            'status' => 1,
            'password' => Hash::make('2024freefee*'),
        ])->assignRole('empresa');

    }
}

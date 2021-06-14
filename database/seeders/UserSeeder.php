<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@mail.com',
        //     'password' =>  Hash::make('admin1234')
        // ])->assignRole('Admin');
        User::create([
            'name' => 'Redactor',
            'email' => 'redactor@mail.com',
            'password' =>  Hash::make('redactor1234')
        ])->assignRole('Redactor');
    }
}

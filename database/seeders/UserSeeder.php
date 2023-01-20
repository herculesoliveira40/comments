<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
               User::create([ // define factory seed
                    'name' => 'Test Admin User',
                    'email' => 'admin@admin.com',
                    'password' =>  Hash::make('admin'),
                    'profile' => '0',
                ]);

       
     }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@mail.com',
            'phone' => '--------',
            'role' => 'admin',
            'password' => 'admin',
        ]);
    }
}

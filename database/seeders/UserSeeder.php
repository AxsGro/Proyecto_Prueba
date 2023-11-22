<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = new User();
        $users->name = 'Alexis';
        $users->email = 'alexis@gmail.com';
        $users->password = '123456789';
        $users->save();
    }
}

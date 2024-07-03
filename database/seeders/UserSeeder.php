<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\User;
use Illuminate\Support\Facades\DB; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => '123',
        //     'role' => 'admin',
        //     'username' => 'admin'

        // ],
        // [
        //     'name' => 'Faculty',
        //     'password' => '123',
        //     'role' => 'faculty',
        //     'username' => 'faculty'

        // ],
        // [
        //     'name' => 'Student',
        //     'email' => 'student@gmail.com',
        //     'password' => '123',
        //     'role' => 'student',
        //     'username' => 'student'

        // ]
    
    // );
    }
}

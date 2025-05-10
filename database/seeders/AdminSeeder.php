<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new \App\Models\User();
        $user->name = 'Abhati';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}

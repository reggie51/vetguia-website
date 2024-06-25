<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;

        $user->name = "Reginald Peña";
        $user->email = "reginald@vetguia.me";
        $user->password = "Rjpg8219";
        $user->user_type = "admin";
        
        $user->save();
    }
}

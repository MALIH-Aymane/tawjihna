<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Créer un admin
        User::create([
            'name' => 'Admin User',
            'email' => 'adminmax@example.com',
            'password' => Hash::make('password'), // Important de hasher le mot de passe !
            'role' => 'admin', // si tu as ajouté un champ role
        ]);

        // Créer un user normal
        User::create([
            'name' => 'Basic User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}

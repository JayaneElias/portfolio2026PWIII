<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Jayane Elias',
                'email' => 'jay@email.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'João Silva',
                'email' => 'joao@email.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@email.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Pedro Oliveira',
                'email' => 'pedro@email.com',
                'password' => Hash::make('123456'),
            ],
            
        ]);
    }
}

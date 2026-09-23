<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('livros')->insert([
            [
                'titulo' => 'Os Noivos do Inverno',
                'autor' => 'Christelle Dabos',
                'ano_publicacao' => 2013,
                'genero_id' => 1,
            ],
            [
                'titulo' => 'Orgulho e Preconceito',
                'autor' => 'Jane Austen',
                'ano_publicacao' => 1813,
                'genero_id' => 1,
            ],
            [
                'titulo' => 'O Morro dos Ventos Uivantes',
                'autor' => 'Emily Brontë',
                'ano_publicacao' => 1847,
                'genero_id' => 1,
            ],
            [
                'titulo' => 'Duna',
                'autor' => 'Frank Herbert',
                'ano_publicacao' => 1965,
                'genero_id' => 2,
            ],
            [
                'titulo' => 'O Senhor dos Anéis',
                'autor' => 'J. R. R. Tolkien',
                'ano_publicacao' => 1954,
                'genero_id' => 3,
            ],
            [
                'titulo' => 'Drácula',
                'autor' => 'Bram Stoker',
                'ano_publicacao' => 1897,
                'genero_id' => 4,
            ],
            [
                'titulo' => 'As Aventuras de Tom Sawyer',
                'autor' => 'Mark Twain',
                'ano_publicacao' => 1876,
                'genero_id' => 5,
            ],
        ]);
    }
}

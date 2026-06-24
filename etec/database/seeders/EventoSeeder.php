<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    public function run(): void
    {
        Evento::create([
            'titulo' => 'Feira Tecnológica',
            'descricao' => 'Exposição de projetos dos alunos com apresentação ao público.',
            'data_evento' => '2026-09-15'
        ]);

        Evento::create([
            'titulo' => 'Semana da Informática',
            'descricao' => 'Palestras e workshops de tecnologia.',
            'data_evento' => '2026-09-20'
        ]);

        Evento::create([
            'titulo' => 'Mostra de Profissões',
            'descricao' => 'Apresentação dos cursos da ETEC.',
            'data_evento' => '2026-09-28'
        ]);
    }
}
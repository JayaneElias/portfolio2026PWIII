<?php
// Este controller eu fiz para gerenciar os cursos.
// Buscando as informações cadastradas e as envia para a página,
// Assim isso permite que os cursos sejam exibidos ao usuário.
namespace App\Http\Controllers;

use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();

        return view('cursos', compact('cursos'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index(Request $request)
    {
        $autorizado = $request->attributes->get('autorizado', false);

        if ($autorizado) {
            $mensagem = 'Bem vindo ao portal';
            $recomendacao = '';
        } else {
            $mensagem = 'Seu acesso não foi autorizado.';
            $recomendacao = 'Recomendado: Entrar em contato com o administrador Sr. Marcelo Collado';
        }

        return view('portal', [
            'mensagem' => $mensagem,
            'recomendacao' => $recomendacao
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Clima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClimaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'data_registro' => 'required|date',
            'regiao' => 'required',
            'relato' => 'required',
        ]);

        Clima::create([
            'user_id' => Auth::id(),
            'data_registro' => $request->data_registro,
            'regiao' => $request->regiao,
            'relato' => $request->relato,
        ]);

        return redirect()->route('historico');
    }

    public function historico()
{
    $climas = Clima::orderBy('data_registro', 'asc')->get();

    return view('historico', compact('climas'));
}
}
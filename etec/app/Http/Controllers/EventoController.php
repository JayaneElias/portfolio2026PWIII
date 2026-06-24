<?php
// O mesmo que que o CursoController, mas esse é para Eventos
// Ele vai buscar os eventos cadastrados, organiza as informações
// e envia os dados para serem exibidos na página.
namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(Request $request)
    {
        $query = Evento::query();

        $ordem = $request->ordem ?? 'cronologico';

        if ($ordem == 'futuros') {
            $query->where('data_evento', '>=', now())
                  ->orderBy('data_evento', 'asc');
        }

        elseif ($ordem == 'semana') {
            $query->whereBetween('data_evento', [
                now(),
                now()->addDays(7)
            ])->orderBy('data_evento', 'asc');
        }

        elseif ($ordem == 'passados') {
            $query->where('data_evento', '<', now())
                  ->orderBy('data_evento', 'desc'); 
        }

        else {
            $query->orderBy('data_evento', 'asc');
        }

        $eventos = $query->get();
            // Criei essa ordenação para facilitar a visualização dos eventos. Assim, o usuário pode escolher como deseja ver as informações,
            // seja em ordem cronológica, eventos futuros, desta semana ou passados.
        
            return view('eventos', compact('eventos'));
    }
}
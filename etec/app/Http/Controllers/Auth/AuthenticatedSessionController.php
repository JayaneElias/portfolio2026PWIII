<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Tela de login
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Processar login
     */
    public function store(LoginRequest $request): RedirectResponse
    {
       
        $request->authenticate();
        $request->session()->regenerate();

        \Log::info('✔ LOGIN REALIZADO COM SUCESSO', [
            'user_id' => Auth::id(),
            'email' => $request->email,
        ]);

      
        return redirect()->route('home');
    }

    /**
     * Logout
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        \Log::info('🚪 USUÁRIO DESLOGADO', [
            'user_id' => Auth::id(),
        ]);

        return redirect('/');
    }
}
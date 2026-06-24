<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Tela de registro
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Processar cadastro
     */
    public function store(Request $request): RedirectResponse
    {
        // validação
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'ra' => ['required', 'string', 'max:20', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // cria usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'ra' => $request->ra,
            'password' => Hash::make($request->password),
        ]);

       
        event(new Registered($user));

       
        Auth::login($user, true);

        
        \Log::info('✔ CADASTRO REALIZADO COM SUCESSO', [
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'ra' => $user->ra,
        ]);

        return redirect()->route('home');
    }
}
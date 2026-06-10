<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | CADASTRO DE USUÁRIO
    |--------------------------------------------------------------------------
    | Cria um novo usuário no sistema e redireciona para login.
    */
    public function register(Request $request)
    {
        // valida os dados do formulário
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // cria usuário no banco
        User::create([
            'name' => $request->name,
            'email' => $request->email,

            // Laravel já faz hash automaticamente (ver User.php)
            'password' => $request->password,
        ]);

        // redireciona para login
        return redirect()->route('login')
            ->with('success', 'Conta criada com sucesso!');
    }

    /*
    |--------------------------------------------------------------------------
    | LOGIN DE USUÁRIO
    |--------------------------------------------------------------------------
    | Autentica usuário usando Auth::attempt()
    */
    public function login(Request $request)
    {
        // validação básica
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        /*
         * Auth::attempt tenta logar o usuário
         * se email + senha baterem com o banco
         */
        if (Auth::attempt($credentials)) {

            // evita sessão fixa (segurança)
            $request->session()->regenerate();

            // redireciona para home
            return redirect('/')
                ->with('success', 'Login realizado com sucesso!');
        }

        // erro de login
        return back()->withErrors([
            'email' => 'Email ou senha inválidos.',
        ])->onlyInput('email');
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')
            ->with('success', 'Logout realizado com sucesso!');
    }
}
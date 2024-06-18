<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use App\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/reserva';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function attemptLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        // Verificar el campo "remember"
        $remember = $request->has('remember') && $request->get('remember') == true;
    
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
    
            Log::info('User logged in: ' . Auth::user()->email);
    
            return $this->authenticated($request, Auth::user());
        }
    
        Log::warning('Login attempt failed for: ' . $request->email);
    
        return back()->withErrors(['email' => 'Correo electrónico o contraseña inválidos']);
    }

    public function authenticated(Request $request, $user)
    {
        if ($user->is_active) {
            Log::info('User authenticated and active: ' . $user->email);
            return redirect()->intended($this->redirectPath());
        }

        Log::warning('User authenticated but inactive: ' . $user->email);
        Auth::logout();
        return back()->withErrors(['email' => 'Tu cuenta está inactiva. Por favor, contacta al soporte.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class LoginController extends Controller
{
    use \Illuminate\Foundation\Auth\AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    protected function login(Request $request)
    {
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        // Intentar iniciar sesión
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
            // Regenerar la sesión para prevenir fijación de sesión
            $request->session()->regenerate();

            // Redirigir al usuario autenticado
            return $this->authenticated($request, Auth::user());
        }

        // Si la autenticación falla
        return back()->withErrors(['email' => 'Correo electrónico o contraseña inválidos']);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->is_active) { // Verificar si el usuario está activo antes de redirigir
            return redirect()->intended($this->redirectPath());
        }

        // Cerrar sesión si el usuario no está activo
        Auth::logout();
        return back()->withErrors(['email' => 'Tu cuenta está inactiva. Por favor, contacta al soporte.']);
    }
}
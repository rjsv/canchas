<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware para asegurar que el usuario esté autenticado
    }

    public function mostrarPerfil()
    {
        $user = Auth::user(); // Obtiene al usuario autenticado actualmente
        return view('profile', compact('user')); // Retorna la vista 'perfil' con los datos del usuario
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservarController extends Controller
{
    // Aplicar el middleware 'auth' a todas las acciones de este controlador
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Acción para mostrar la vista de canchas
    public function index()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Pasar el usuario a la vista
        return view('canchas', compact('user'));
    }

    // Acción para mostrar la vista de reservar
    public function reservar($cancha)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Pasar el usuario y la cancha a la vista
        return view('reservar', compact('cancha', 'user'));
    }
}
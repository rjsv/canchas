<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservarController extends Controller
{
    public function index()
    {
        return view('canchas');
    }

    public function reservar($cancha)
    {
        return view('reservar', compact('cancha'));
    }
}
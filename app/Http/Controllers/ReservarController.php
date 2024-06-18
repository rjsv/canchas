<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Reserva;

class ReservarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('canchas', compact('user'));
    }

    public function reservar($cancha)
    {
        $user = Auth::user();
        return view('reservar', compact('cancha', 'user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cancha' => 'required|string',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        if ($validator->fails()) {
            return redirect()->route('reservar', ['cancha' => $request->cancha])
                ->withErrors($validator)
                ->withInput();
        }


        $reserva = new Reserva;
        $reserva->court_id = $request->cancha;
        $reserva->user_id = Auth::id();
        $reserva->date = $request->fecha;
        $reserva->time = $request->hora;
        $reserva->save();

        return redirect()->route('reserva')->with('success', 'Reserva realizada con éxito');
    }
}
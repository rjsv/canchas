<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/'; // Página a la que redirigir después del registro

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dni' => ['nullable', 'string', 'max:191'],
            'category' => ['nullable', 'string', 'max:191'],
            'birthdate' => ['nullable', 'date'],
            'sex' => ['required', 'integer', 'between:0,1'],
            'phone' => ['nullable', 'string', 'max:191'],
            'photo' => ['nullable', 'string', 'max:191'],
            'level' => ['required', 'integer'],
            'dominant_hand' => ['required', 'integer', 'between:0,1'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dni' => $data['dni'],
            'category' => $data['category'],
            'birthdate' => $data['birthdate'],
            'sex' => $data['sex'],
            'phone' => $data['phone'],
            'photo' => $data['photo'],
            'level' => $data['level'],
            'dominant_hand' => $data['dominant_hand'],
        ]);
    }

    // Método para manejar el registro
    public function register(Request $request)
    {
        // Validación de los datos del formulario
        $this->validator($request->all())->validate();

        // Creación del usuario
        $user = $this->create($request->all());

        // Puedes autenticar al usuario automáticamente después del registro si lo deseas
        // Auth::login($user);

        // Redirigir a la página principal o a donde desees después del registro
        return redirect($this->redirectPath());
    }
}
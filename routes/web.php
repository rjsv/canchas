<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/schedules', function () {
    return view('schedules');
});

Route::get('/academy', function () {
    return view('academy');
});

// Route::get('/login', function () {
//     return view('login');
// });
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/attempt-login', 'Auth\LoginController@attemptLogin')->name('attemptLogin');
Route::post('/logout', 'Auth\LoginController@logout')->name('logOut');


Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/attempt-register', 'Auth\RegisterController@attemptRegister')->name('attemptRegister');

Route::get('/reserva', 'ReservarController@index')->name('reserva');
Route::get('/reservar/{cancha}', 'ReservarController@reservar')->name('reservar');

Route::get('/reserva', 'ReservarController@index')->name('reserva');
Route::get('/reservar/{cancha}', 'ReservarController@reservar')->name('reservar');
Route::post('/reserva', 'ReservarController@store')->name('reserva.store');

Route::get('/mostrarPerfil', 'PerfilController@mostrarPerfil')->name('mostrarPerfil');


Route::get('/success', function () {
    return view('success');
})->name('success');
Route::get('/thanksregister', function () {
    return view('thanksregister');
})->name('thanksregister');
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/register', function () {
//     return view('register');
// });
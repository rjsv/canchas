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
Route::post('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@logout');


Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/reserva', 'ReservarController@index')->name('reserva');
Route::get('/reservar/{cancha}', 'ReservarController@reservar')->name('reservar');

// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/register', function () {
//     return view('register');
// });
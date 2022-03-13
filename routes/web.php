<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AlumnoController;


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

Route::get('/Maestros', function () {
    return view('Maestros');
});

Route::get('/Administrativos', function () {
    return view('Administrativos');
});

Route::resource('Alumnos', AlumnoController::class);


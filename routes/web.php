<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\areascontroller;
use App\Http\controllers\perfilscontroller;
use App\Http\controllers\empleadoscontroller;

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
    return view('plantilla');
});

Route::resource('areas', areascontroller::class);
Route::resource('perfils', perfilscontroller::class);
Route::resource('empleados', empleadoscontroller::class);
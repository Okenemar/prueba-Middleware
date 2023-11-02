<?php

use App\Http\Middleware\RedirigirVista;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Mensajes;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(RedirigirVista::class,Mensajes::class);

//Route::get('/log', function () {
  //  return view('welcome');
//})->middleware(Mensajes::class);





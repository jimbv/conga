<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/{codigo}', function ($codigo) {
    $texto = "Los invito a mi primer cumpleaños a realizarse el día sábado 10/12/2022 en Bv. 
    Eva Perón y Rodriguez Peña desde las 18:30 Hs.
    <br/>
    Los espero!";
    $invitados = "José y Flor";
    return view('invitacion', ['texto' => $texto,'invitados' => $invitados]); 
});
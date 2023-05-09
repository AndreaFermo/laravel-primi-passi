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
  
    $data = ['salutoEn' => 'Hello World!'];
    return view('hello', $data);
})->name('home');

Route::get('it', function () {
  
    $data = ['salutoIt' => 'Ciao Mondo!'];
    return view('it', $data);
})->name('it');

Route::get('es', function () {
  
    $data = ['salutoEs' => '¡Hola Mundo!'];
    return view('es', $data);
})->name('es');

Route::get('jp', function () {
  
    $data = ['salutoJp' => '「こんにちは世界」'];
    return view('jp', $data);
})->name('jp');

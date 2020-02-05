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

// Тест шаблона с бутстрапом
Route::get('/', function () {
    return view('index');
});


// Оригинальное приветствие Laravel
Route::get('/welcome', function () {
    return view('welcome');
});
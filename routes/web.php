<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/hello', function () {
    return "Hello World";
});


Route::get('/add/{a}/{b}', function ($a, $b) {
    return $a + $b;
});


Route::get('/subtract/{a}/{b}', function ($a, $b) {
    return $a - $b;
});


Route::get('/multiply/{a}/{b}', function ($a, $b) {
    return $a * $b;
});


Route::get('/divide/{a}/{b}', function ($a, $b) {
    if ($b == 0) {
        return "Dzielenie przez zero nie jest możliwe";
    } else {
        return $a / $b;
    }
});

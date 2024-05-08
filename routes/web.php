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
    $name = 'Beatrice';
    $surname = 'Rocchi';

    return view('home', compact('name', 'surname'));
})->name('home');

Route::get('/about-Laravel', function () {
    return view('about');
})->name('about');

Route::get('/documentation-Laravel', function () {
    return view('documentation');
})->name('documentation');

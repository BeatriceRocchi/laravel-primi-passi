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
    $logo = 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/1200px-Logo.min.svg.png';

    return view('home', compact('name', 'surname', 'logo'));
})->name('home');

Route::get('/about-Laravel', function () {
    return view('about');
})->name('about');

Route::get('/documentation-Laravel', function () {
    return view('documentation');
})->name('documentation');

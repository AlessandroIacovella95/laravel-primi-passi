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
    $name="Hello World";
    return view('home', compact('name'));
})->name('home');

Route::get('contacts', function () {
    $contatti=[
        'Alessandro',
        'Alessio',
        'Andrea'
    ];
    return view('contact', compact('contatti'));
})->name('contact');
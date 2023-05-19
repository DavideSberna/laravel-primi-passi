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


Route::get('/home', function () {
    $nav = [
        'pagina1',
        'pagina2',
        'pagina3',
        'pagina4',
    ];
    return view('home', compact('nav'));
})->name('home');


Route::get('/pagina1', function () {
    $page = 'Contenuto della pagina 1';
    $link = route('home');
    return view('pagina1', compact('page', 'link'));
})->name('pagina1');


Route::get('/pagina2', function () {
    $page = 'Contenuto della pagina 2';
    $link = route('home');
    return view('pagina2', compact('page', 'link'));
})->name('pagina2');


Route::get('/pagina3', function () {
    $page = 'Contenuto della pagina 3';
    $link = route('home');
    return view('pagina3' , compact('page', 'link'));
})->name('pagina3');


Route::get('/pagina4', function () {
    $page = 'Contenuto della pagina 4';
    $link = route('home');
    return view('pagina4' , compact('page', 'link'));
})->name('pagina4');

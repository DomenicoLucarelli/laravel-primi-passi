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

    $user = 'Domenico Lucarelli';

    $headerEl = ['home','contact','where', 'who',];


    return view('home', compact('user', 'headerEl'));
})->name('home');

Route::get('/contact', function () {

    $title = 'Contact';

    $headerEl = ['home','contact','where', 'who',];


    return view('where', compact('title', 'headerEl'));
})->name('contact');

Route::get('/where', function () {

    $title = 'Where';

    $headerEl = ['home','contact','where', 'who',];


    return view('where', compact('title', 'headerEl'));
})->name('where');

Route::get('/who', function () {

    $title = 'Who';

    $headerEl = ['home','contact','where', 'who',];


    return view('who', compact('title', 'headerEl'));
})->name('who');

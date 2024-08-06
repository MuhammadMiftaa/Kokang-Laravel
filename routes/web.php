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
    return view('homepage', ['title' => 'Homepage']);
});

Route::get('/firearms', function () {
    return view('firearms', ['title' => 'Firearms']);
});

Route::get('/firearms/{type}', function($type){
    return view('firearm', ['type' => $type]);
});

Route::get('/ammo', function () {
    return view('ammo', ['title' => 'Ammo']);
});

Route::get('/grenade', function () {
    return view('grenade', ['title' => 'Grenade']);
});

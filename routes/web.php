<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WeaponController;
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

Route::get('/', [HomepageController::class, 'index']);

Route::get('/firearms', [WeaponController::class, 'index']);

Route::get('/firearms/type/{type}', [ProductController::class, 'index']);

Route::get('/ammo', function () {
    return view('ammo', ['title' => 'Ammo']);
});

Route::get('/grenade', function () {
    return view('grenade', ['title' => 'Grenade']);
});

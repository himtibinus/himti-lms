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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
})->middleware(['auth'])->name('dashboard-admin');

Route::get('/dashboard-aktivis', function () {
    return view('dashboard-aktivis');
})->middleware(['auth'])->name('dashboard-aktivis');

Route::get('/dashboard-manager', function () {
    return view('dashboard-manager');
})->middleware(['auth'])->name('dashboard-manager');

Route::get('/dashboard-dummy', function () {
    return view('dashboard-dummy');
})->middleware(['auth'])->name('dashboard-dummy');

require __DIR__.'/auth.php';

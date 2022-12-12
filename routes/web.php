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
    return view('landing');
});

Auth::routes();

Route::get('/select-role', [App\Http\Controllers\HomeController::class, 'selectRole'])->name('select-role');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/startups', [App\Http\Controllers\StartupController::class, 'startupList'])
    ->name('startups');
Route::get('/startups/create', [App\Http\Controllers\StartupController::class, 'create'])
    ->name('startup-create');

//Provisional
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'perform']);
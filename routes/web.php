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
Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])
->name('landings');
Route::get('investor', [App\Http\Controllers\LandingController::class, 'investor'])
->name('landings.investor');
Route::get('professional', [App\Http\Controllers\LandingController::class, 'professional'])
->name('landings.professional');

Route::get('/select-role', [App\Http\Controllers\HomeController::class, 'selectRole'])->name('select-role');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/startups', [App\Http\Controllers\StartupController::class, 'startupList'])
    ->name('startups');
Route::get('/startups/create', [App\Http\Controllers\StartupController::class, 'create'])
    ->name('startup-create');

//Provisional
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'perform']);
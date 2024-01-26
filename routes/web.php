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

Route::get('/' , [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');


Route::get('/servizi/{service}' , [App\Http\Controllers\PublicController::class, 'show'])->name('servizi.show');

Route::get('/servizi' , [App\Http\Controllers\PublicController::class, 'index'])->name('servizi.index');


Route::get('/chi-sono' , function(){return view('chisono');})->name('chisono');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
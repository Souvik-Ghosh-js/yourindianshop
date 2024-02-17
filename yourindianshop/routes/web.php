<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


//pages routes
Route::get('/' , [HomeController::class , 'index']);
Route::get('/about' , [HomeController::class , 'about']);
Route::get('/contact' , [HomeController::class , 'contact']);
Route::get('/portfolio' , [HomeController::class , 'portfolio']);
Route::get('/elements' , [HomeController::class , 'elements']);
Route::get('/single' , [HomeController::class , 'single']);
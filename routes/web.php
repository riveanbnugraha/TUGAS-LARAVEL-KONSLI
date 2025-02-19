<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\court_typeController;
use App\Http\Controllers\courtController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/home', [court_typeController::class, 'home']);
Route::get('/mcourt', [courtController::class, 'mcourt']);
Route::resource('court', CourtController::class);
Route::resource('court_type', Court_typeController::class);
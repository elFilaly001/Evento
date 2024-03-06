<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
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

Route::get("/", [EventController::class, "index"])->name("home");


// LOGIN

Route::get('/login', [UserController::class, 'login_index'])->name('login_index');
Route::get('/register', [UserController::class, 'register_index'])->name('register_index');
Route::post('/login/post', [UserController::class, 'login'])->name('login');
Route::post('/register/post', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'destroy']);

// Orgnizer

Route::get('/dashboard', [EventController::class, 'index'])->name('Admin_index');
Route::post('/AddEvent', [EventController::class, 'store'])->name('AddEvent');
Route::get('/EditEvent/{event}', [EventController::class, 'edit'])->name('editEvent');
Route::put('/UpdateEvent/{event}', [EventController::class, 'update'])->name('updateEvent');

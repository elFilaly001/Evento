<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
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

Route::get("/", [HomeController::class, "Home_index"])->name('home');
Route::get('/list', [HomeController::class, "list"])->name("list");


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
Route::put('/UpdateEvent/{event}', [EventController::class, 'update'])->name('UpdateEvent');
Route::delete('/DeleteEvent/{event}', [EventController::class, 'destroy'])->name('DeleteEvent');


//Admin

Route::get('/Category', [CategoryController::class, 'index'])->name('Category_index');
Route::post('/AddCategory', [CategoryController::class, 'store'])->name('Category_Store');
Route::post('/EditCategory', [CategoryController::class, 'edit'])->name('Category_Edit');
Route::put('/UpdateCategory', [CategoryController::class, 'update'])->name('Category_Update');
Route::delete('/DeleteCategory/{category}', [CategoryController::class, 'destroy'])->name('Category_Delete');

Route::patch('/ApproveEvent', [EventController::class, "Approve"])->name("Approve_Event");
Route::patch('/RejectEvent', [EventController::class, "Reject"])->name("Reject_Event");


Route::get('/details/{event}', [EventController::class, 'detail_index'])->name('detail_index');
Route::post('/reserve', [ReservationController::class, 'store'])->name('reserve_place');
Route::patch('/reserve/approve', [ReservationController::class, 'approve'])->name('reserve_approve');
Route::patch('/reserve/reject', [ReservationController::class, 'reject'])->name('reserve_reject');

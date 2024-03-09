<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/mobil', [HomeController::class, 'mobil'])->name('mobil');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'loginp']);
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/register', [HomeController::class, 'register']);
Route::post('/register', [HomeController::class, 'registerp']);
Route::get('/dashboard', [AdminController::class, 'index']);

Route::get('/users', [AdminController::class, 'users']);
Route::post('/users', [AdminController::class, 'usersp']);
Route::post('/users/{id}', [AdminController::class, 'userse']);
Route::get('/users/{id}', [AdminController::class, 'usersd']);

Route::get('/mobils', [AdminController::class, 'mobils']);
Route::post('/mobils', [AdminController::class, 'mobilsp']);
Route::post('/mobils/{id}', [AdminController::class, 'mobilse']);
Route::get('/mobils/{id}', [AdminController::class, 'mobilsd']);

Route::get('/peminjamans', [AdminController::class, 'peminjamans']);
Route::post('/peminjamans', [AdminController::class, 'peminjamansp']);
Route::post('/peminjamans/{id}', [AdminController::class, 'peminjamanse']);
Route::get('/peminjamans{id}', [AdminController::class, 'peminjamansd']);

Route::get('/pengembalians', [AdminController::class, 'pengembalians']);
Route::post('/pengembalians', [AdminController::class, 'pengembaliansp']);
Route::post('/pengembalians/{id}', [AdminController::class, 'pengembalianse']);
Route::get('/pengembalians/{id}', [AdminController::class, 'pengembaliansd']);




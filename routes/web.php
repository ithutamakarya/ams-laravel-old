<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TypeController;
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

// Public Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/param-auditee', [TypeController::class, 'main'])->name('type.main');
    Route::get('type', [TypeController::class, 'index'])->name('type.index');
    Route::get('type/create', [TypeController::class, 'create'])->name('type.create');
    Route::post('type', [TypeController::class, 'store'])->name('type.store');
    Route::get('type/{id}/edit', [TypeController::class, 'edit'])->name('type.edit');
    Route::patch('type/{id}', [TypeController::class, 'update'])->name('type.update');
    Route::delete('type/{id}', [TypeController::class, 'destroy'])->name('type.destroy');
});

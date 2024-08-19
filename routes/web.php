<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', function () {
        // This route is now protected by the EnsureUserIsAdmin middleware
    });
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', 'App\Http\Controllers\HomeController@aboutUs');

require __DIR__.'/auth.php';

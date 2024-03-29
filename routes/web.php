<?php

use App\Http\Controllers\AutUser\MainController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [MyController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/invoices', [MyController::class, 'invoices'])->middleware(['auth', 'verified'])->name('invoices');
Route::get('/referals', [MyController::class, 'referals'])->middleware(['auth', 'verified'])->name('referals');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

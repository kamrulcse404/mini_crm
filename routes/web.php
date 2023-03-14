<?php

use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\DesignationController;
use App\Http\Controllers\Dashboard\EmployeeController;
use App\Http\Controllers\Dashboard\TagController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::resource('designation', DesignationController::class);
    Route::resource('tag', TagController::class);
    Route::resource('client', ClientController::class);
    Route::resource('employee', EmployeeController::class);

    //employee
    // Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
    // Route::post('employee', [EmployeeController::class, 'store'])->name('employee.store');
    // Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    // Route::get('employee/{id}', [EmployeeController::class, 'show'])->name('employee.show');
    // Route::put('employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    // Route::delete('employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    // Route::get('employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
});
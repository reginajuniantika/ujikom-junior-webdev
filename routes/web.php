<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('employee')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
        Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');
        Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
        Route::post('/updateimage/{id}', [EmployeeController::class, 'updateimage'])->name('employee.updateimage');
        Route::delete('/{id}/delete', [EmployeeController::class, 'destroy'])->name('employee.delete');
    });
});


<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::get('cars', [CarController::class, 'index'])->name('cars.index');
    Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('cars', [CarController::class, 'store'])->name('cars.store');
    Route::get('maintenances', [MaintenanceController::class, 'index'])->name('maintenances.index');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';

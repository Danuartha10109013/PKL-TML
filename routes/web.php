<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/{vue_capture?}', function () {
//     return view('welcome');
// })->where('vue_capture', '[\/\w\.-]*');

// Route::get("/test-me", function () {
//     return 'Hello from Laravel!';
// });

use App\Http\Controllers\PengecekanController;

Route::get('/pengecekan/create', [PengecekanController::class, 'create'])->name('pengecekan.create');
Route::post('/pengecekan', [PengecekanController::class, 'store'])->name('pengecekan.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-analytics');
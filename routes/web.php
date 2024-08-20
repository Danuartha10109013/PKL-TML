<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MappingController;
use Illuminate\Support\Facades\Route;

// Route::get('/{vue_capture?}', function () {
//     return view('welcome');
// })->where('vue_capture', '[\/\w\.-]*');

// Route::get("/test-me", function () {
//     return 'Hello from Laravel!';
// });

use App\Http\Controllers\PengecekanController;
use App\Http\Controllers\PrintController;

// Route::get('/pengecekan/create', [PengecekanController::class, 'create'])->name('pengecekan.create');


Route::get('/shipment/{id}', [DashboardController::class, 'show'])->name('show-shipment');
Route::get('/mapping/{id}', [MappingController::class, 'index'])->name('maping-shipment');


Route::post('/store', [MappingController::class, 'store']);
Route::get('/print/{id}', [PrintController::class, 'print'])->name('print');



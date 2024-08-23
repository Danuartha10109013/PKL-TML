<?php

use App\Http\Controllers\CoilController;
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
use App\Models\Coil;

// Route::get('/pengecekan/create', [PengecekanController::class, 'create'])->name('pengecekan.create');


Route::get('/', [DashboardController::class, 'index'])->name('shipment');
Route::get('/shipment/{id}', [DashboardController::class, 'show'])->name('show-shipment');
Route::get('shipmentcreate', [DashboardController::class, 'create'])->name('create-shipment');
Route::post('shipmentcreated', [DashboardController::class, 'store'])->name('store-shipment');


Route::get('/mapping/{id}', [MappingController::class, 'index'])->name('maping-shipment');

Route::get('/coil', [CoilController::class, 'indexs'])->name('coil');
Route::get('/coiling/{no_gs}', [CoilController::class, 'index'])->name('coiling');
Route::get('/tambah/coil/{no_gs}', [CoilController::class, 'create'])->name('tambahcoil');
Route::post('/tambah/coil/store', [CoilController::class, 'store'])->name('koil.store');


Route::post('/store/{no_gs}', [MappingController::class, 'store']);
// Route::get('/print/{id}', [PrintController::class, 'print'])->name('print');
Route::get('/print/{id}', [PrintController::class, 'view_pdf'])->name('print');
Route::get('/prints/{id}', [PrintController::class, 'print'])->name('prints');



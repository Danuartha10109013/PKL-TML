<?php

use Illuminate\Support\Facades\Route;

Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');

Route::get("/test-me", function () {
    return 'Hello from Laravel!';
});


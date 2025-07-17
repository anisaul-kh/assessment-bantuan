<?php

use App\Http\Controllers\PenerimaController;

Route::get('/', function () {
    return redirect()->route('penerima.index');
});

Route::resource('penerima', PenerimaController::class);

Route::resource('assessment', AssessmentController::class);
Route::resource('assessment', App\Http\Controllers\AssessmentController::class);

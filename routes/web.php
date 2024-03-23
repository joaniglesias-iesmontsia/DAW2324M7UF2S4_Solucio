<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumneController;


Route::get('/', function () {
    return redirect()->route('alumnes.index');
});

Route::resource('alumnes', AlumneController::class);
Route::get('/delete/{alumne}', [AlumneController::class, 'delete'])->name('alumnes.delete');

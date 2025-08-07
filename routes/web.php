<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
Route::get('/students/{studentId}', [StudentsController::class, 'show'])->name('students.show');

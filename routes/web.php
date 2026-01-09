<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', [StudentController::class, 'index'])->name('student.home');
    Route::get('/student/add', [StudentController::class, 'add'])->name('student.add');
    Route::post('/student/create', [StudentController::class, 'create'])->name('student.create');
    Route::get('/student/manage', [StudentController::class, 'manage'])->name('student.manage');
    Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');




});

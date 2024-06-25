<?php

use App\Http\Controllers\DetailFormController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/form/create', [FormController::class, 'create'])->name('form.main');
Route::get('/form/view', [FormController::class, 'index'])->name('form.index');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
Route::get('/form_delete/{id}', [FormController::class, 'destroy'])->name('form.destroy');
Route::get('/form_edit/{id}', [FormController::class, 'edit'])->name('form.edit');
Route::post('/form_update/{id}', [FormController::class, 'update'])->name('form.update');

Route::get('/getAcademicDetails/{id}', [FormController::class, 'getAcademicDetails']);


Route::get('/detailform/create', [DetailFormController::class, 'create'])->name('add.detailform');
Route::get('/detailform/view', [DetailFormController::class, 'index'])->name('view.detailform');
Route::post('/detailform/store', [DetailFormController::class, 'store'])->name('store.detailform');
Route::get('/detailform_delete/{id}', [DetailFormController::class, 'destroy'])->name('delete.detailform');
Route::get('/detailform_edit/{id}', [DetailFormController::class, 'edit'])->name('edit.detailform');
Route::post('/detailform_update/{id}', [DetailFormController::class, 'update'])->name('update.detailform');


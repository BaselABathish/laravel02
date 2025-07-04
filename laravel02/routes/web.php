<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\VectorStoreController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AssistantController;
use App\Http\Controllers\home;

use Illuminate\Support\Facades\Route;

Route::get('/', [home::class, 'main'])->name('home');

//company
Route::get('/company', [CompanyController::class, 'create_company'])->name('company.create');
Route::post('/company', [CompanyController::class, 'store_company'])->name('company.store');

//employee
Route::get('/employee', [EmployeeController::class, 'create_employee'])->name('employee.create');
Route::post('/employee', [EmployeeController::class, 'store_employee'])->name('employee.store');

//file
Route::get('/file', [FileController::class, 'create_file'])->name('file.create');
Route::post('/file', [FileController::class, 'store_file'])->name('file.store');


//vector store
Route::get('/vector_store', [VectorStoreController::class, 'create_vector_store'])->name('vector_store.create');
Route::post('/vector_store', [VectorStoreController::class, 'store_vector_store'])->name('vector_store.store');


//assistant
Route::get('/assistant', [AssistantController::class, 'create_assistant'])->name('assistant.create');
Route::post('/assistant', [AssistantController::class, 'store_assistant'])->name('assistant.store');



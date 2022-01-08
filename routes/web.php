<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LabController;

Route::view('/', 'index');

// Authentication Routes
Route::view('/register', 'auth.register');
Route::post('/store', [AuthController::class, 'store']);

Route::view('/login', 'auth.login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::prefix('admin')->group(function () 
{
    Route::view('/home', 'admin.home');
});

// Laboratory Routes
Route::prefix('lab')->group(function () 
{
    Route::view('/home', 'lab.home');
    Route::view('/patients', 'registerPatient');
    Route::post('/register-patient', [LabController::class, 'registerPatient']);
    Route::view('/employees', 'registerEmployee');
    Route::post('/register-employee', [LabController::class, 'registerEmployee']);
});

// Patient Routes
Route::prefix('patient')->group(function () 
{
    Route::view('/home', 'patient.home');
});

// Employee Routes
Route::prefix('employee')->group(function () 
{
    Route::view('/home', 'employee.home'); 
});




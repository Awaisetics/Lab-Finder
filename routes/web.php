<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\TestController;

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
    Route::get('/requests', [AuthController::class, 'labRequests']);
    Route::get('/getUser/{id}', [AuthController::class, 'getLab']);
    // Route::get('/getApprovedUser/{id}', [AuthController::class, 'getApprovedUser']);
    Route::get('/lab/approve/{id}', [AuthController::class, 'approveOrRejectRequest']);
    Route::get('/lab/reject/{id}', [AuthController::class, 'approveOrRejectRequest']);
    Route::get('/lab/delete/{id}', [AuthController::class, 'approveOrRejectRequest']);
    Route::get('/labs', [AuthController::class, 'LabList']);
});

// Laboratory Routes
Route::prefix('lab')->group(function () 
{
    Route::view('/home', 'lab.home');
    Route::get('/patients', [LabController::class,'AddPatient']);
    Route::post('/addPatient', [LabController::class,'registerPatient']);
    Route::view('/employees', 'registerEmployee');
    Route::post('/addEmploye', [LabController::class, 'registerEmployee']);
    Route::get('/addEmploye', function(){
        return view('lab.AddEmployee');
    });

    Route::get('/tests',  [TestController::class, 'index']);
    Route::view('/test/add', 'lab.addTest');
    Route::post('/test/store', [TestController::class, 'store']);

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




<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Password\ResetPasswordController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Laeve\LeaveController;
use App\Http\Controllers\Password\ForgotPasswordController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route for login form
Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin']);

//logout
Route::get('logout',[AuthController::class,'logout']);

//route for admin dashboard
Route::view('/admindashboard','admin.admindashboard')->name('admindashboard');
//admin datatable
Route::view('/empdata','admin.empdata')->name('admin.empdata');


//route for employee dashboard
Route::view('/empdashboard','employee.employeedashboard')->name('empdashboard');


//route for dashboard function 
Route::get('dashboard',[AuthController::class,'Dashboard'])->middleware('Login');


//admin datatable view,edit,delete,update  
Route::get('/view',[EmployeeController::class,'view']);
Route::get('/delete/{id}',[EmployeeController::class,'delete']);
Route::post('/store',[EmployeeController::class,'store'])->name('admin.store');
Route::get('/edit/{id}', [EmployeeController::class,'edit']);
Route::put('/update/{id}',[EmployeeController::class,'update'])->name('update');


//leave route
Route::get('/leave',[LeaveController::class,'leave']);
Route::get('/absent',[LeaveController::class,'absent']);



Route::get('/forgotpassword', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');

Route::post('/forgotpassword', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
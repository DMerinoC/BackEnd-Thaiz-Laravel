<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeOfServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VariableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/user', UserController::class);
Route::resource('/appointment', AppointmentController::class);
Route::resource('/variable', VariableController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/discount', DiscountController::class);
Route::resource('/type', TypeOfServiceController::class);
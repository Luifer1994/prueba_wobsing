<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/list-user-by-role',[UserController::class, 'listByRole']);
Route::get('/user-role-by-permission', [UserController::class, 'listUserRoleByPermission']);
Route::get('/lis-permision-by-role', [PermissionController::class, 'listByRol']);

Route::get('/correctiosn-array',[UserController::class, 'correctionArray']);

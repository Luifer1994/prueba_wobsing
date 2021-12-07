<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'showFormLogin'])->name('showFormLogin')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
//
Route::get('/verificate', function () {
    return view('auth.verificate');
})->name('verificate')->middleware('guest');

//Rutas protegidas
Route::middleware(['auth', 'verifiedEmail', 'LastSession', 'SessionCokie'])->group(function () {
    Route::get('/home', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

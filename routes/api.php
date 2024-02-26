<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * route "/register"
 * @method "POST"
 */
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

/**
 * route "/login"
 * @method "POST"
 */
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

Route::middleware('jwt.verify')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('department', [App\Http\Controllers\Api\DepartmentController::class, 'index']);
    Route::post('department', [App\Http\Controllers\Api\DepartmentController::class, 'store']);
    Route::get('department/{id}', [App\Http\Controllers\Api\DepartmentController::class, 'show']);
    Route::put('department/{id}', [App\Http\Controllers\Api\DepartmentController::class, 'update']);
    Route::delete('department/{id}', [App\Http\Controllers\Api\DepartmentController::class, 'destroy']);
});

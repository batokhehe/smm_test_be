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

    Route::get('employee', [App\Http\Controllers\Api\EmployeeController::class, 'index']);
    Route::post('employee', [App\Http\Controllers\Api\EmployeeController::class, 'store']);
    Route::get('employee/{id}', [App\Http\Controllers\Api\EmployeeController::class, 'show']);
    Route::put('employee/{id}', [App\Http\Controllers\Api\EmployeeController::class, 'update']);
    Route::delete('employee/{id}', [App\Http\Controllers\Api\EmployeeController::class, 'destroy']);

    Route::get('products', [App\Http\Controllers\Api\ProductController::class, 'index']);
    Route::post('products', [App\Http\Controllers\Api\ProductController::class, 'store']);
    Route::get('products/{id}', [App\Http\Controllers\Api\ProductController::class, 'show']);
    Route::put('products/{id}', [App\Http\Controllers\Api\ProductController::class, 'update']);
    Route::delete('products/{id}', [App\Http\Controllers\Api\ProductController::class, 'destroy']);
});

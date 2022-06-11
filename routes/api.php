<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/admin/login', [AuthController::class, 'loginAdmin']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/forgotPassword', [AuthController::class, 'forgotPassword']);
Route::post('/auth/change-password', [AuthController::class, 'changePassword']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function (Request $request) {
        return auth()->user();
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);

    Route::put('/user/update/{userId}', [UserController::class, 'updateUser']);
    Route::get('/user/{userId}', [UserController::class, 'getUser']);

    Route::post('/upload', [UploadController::class, 'uploadFile']);
    Route::apiResource('/products', ProductController::class);
    Route::apiResource('/categories', CategoryController::class);
    Route::apiResource('/orders', OrderController::class)->except('destroy');
    Route::apiResource('/ratings', RatingController::class);
});

<?php

use App\Http\Controllers\dashboard\AboutController;
use App\Http\Controllers\dashboard\BlogController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\GeneralController;
use App\Http\Controllers\dashboard\RoomController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('about_list', AboutController::class);
Route::resource('blog', BlogController::class);
Route::resource('room', RoomController::class);
Route::resource('contact', ContactController::class);
Route::resource('general_dashboard', GeneralController::class);

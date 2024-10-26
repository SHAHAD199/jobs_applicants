<?php

use App\Http\Controllers\{ApplicantController, AuthController, UserController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('users', UserController::class);
Route::resource('applicants', ApplicantController::class);
Route::controller(AuthController::class)->group(function(){
    Route::post('login', 'login');
    Route::post('logout', 'logout');
});
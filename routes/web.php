<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SharedDataController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('register', [UserController::class, 'register']);
Route::post('teams', [TeamController::class, 'create']);
Route::post('teams/{team}/invite', [TeamController::class, 'invite']);
Route::post('messages', [MessageController::class, 'send']);
Route::post('shared-data', [SharedDataController::class, 'share']);
<?php

use App\Http\Controllers\SocketsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/sockets/connect", [SocketsController::class, "connect"]);
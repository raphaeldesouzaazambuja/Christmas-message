<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get("/", [MessageController::class, 'create'])->name('messages.create');
Route::post("/storemessage", [MessageController::class, 'store'])->name('messages.store');
route::get('/messages/{hash}', [MessageController::class,'show'])->name('messages.show');

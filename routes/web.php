<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

// Route::get('/', function () {
//     return view('welcome');
// });

// pakai controller, bukan closure
Route::get('/', [WebController::class, 'index']);
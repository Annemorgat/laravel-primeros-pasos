<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/user/{userId}/details", [UserDetailsController::class, "userDetails"])
    ->name("userDetails")
    ->where(['userId' => '[1-9][0-9]*']);

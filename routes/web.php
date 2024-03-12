<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get("/", function(){
    echo 'index';
    return view('welcome');
});

Route::resource('post', PostController::class);


/* Estas son las rutas que genera el Route:resource:
    Route::get('post', [PostController::class, 'index']);
    Route::get('post/{post}', [PostController::class, 'show']);
    Route::get('post/create', [PostController::class, 'create']);
    Route::get('post/{post}/edit', [PostController::class, 'edit']);

    Route::post('post/{post}/edit', [PostController::class, 'store']);

    Route::put('post/{post}', [PostController::class, 'update']);

    Route::delete('post/{post}', [PostController::class, 'destroy']);
*/

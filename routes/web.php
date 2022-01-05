<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Hello FROM Laravel';
});

Route::get('/controller',[PagesController::class,'controller']);

Route::get('/amigos',[PagesController::class,'amigos']);

Route::get('/sobre',[PagesController::class,'sobre']);

Route::get('/app',[PagesController::class,'app']);

Route::get('/welcome',[PagesController::class,'welcome']);
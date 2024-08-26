<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBrngController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', [DataBrngController::class, 'index']);
Route::get('/create', [DataBrngController::class, 'create']);
Route::post('/store', [DataBrngController::class, 'store']);
Route::get('/db/{id}/edit', [DataBrngController::class, 'edit']);
Route::put('/db/{id}', [DataBrngController::class, 'update']);
Route::delete('/db/{id}', [DataBrngController::class, 'destroy']);


Route::get('/dashboard', [DashboardController::class, 'dashboard']);
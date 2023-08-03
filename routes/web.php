<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;

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

// Route::middleware('validate.url')->group(function () {
//     Route::get('/desa', [DesaController::class, 'index']);
//     Route::get('/desa/{id}', [DesaController::class, 'show']);
//     Route::post('/desa', [DesaController::class, 'store']);
//     Route::put('/desa/{id}', [DesaController::class, 'update']);
//     Route::delete('/desa/{id}', [DesaController::class, 'destroy']);
// });

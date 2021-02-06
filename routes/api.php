<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CalculatorController;
use \App\Http\Middleware\HasOperation;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('calculation.')->group(function () {
    Route::get('/operations', [CalculatorController::class, 'index'])->name('index');

    Route::post('/operations', [CalculatorController::class, 'store'])->middleware([HasOperation::class])->name('store');

    Route::delete('/operations/{operations}', [CalculatorController::class, 'delete'])->name('delete');

    Route::delete('/operations', [CalculatorController::class, 'destroy'])->name('destroy');
});

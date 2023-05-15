<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/events', [\App\Http\Controllers\Api\EventsController::class, 'index']);
Route::get('v1/events/{id}', [\App\Http\Controllers\Api\EventsController::class, 'show']);

Auth::routes();

Route::put('/eventupdate', [App\Http\Controllers\EditController::class, 'update'])->name('event.update');

<?php

use App\Http\Controllers\EndpointController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::apiResource('endpoint', EndpointController::class);
});

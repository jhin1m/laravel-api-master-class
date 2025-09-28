<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TicketController;

Route::prefix('v1')->group(function () {
    Route::apiResource('tickets', TicketController::class);
});
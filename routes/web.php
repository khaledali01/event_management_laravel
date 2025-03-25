<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::resource('events', EventController::class);

require __DIR__ . '/auth.php';

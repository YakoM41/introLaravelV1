<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

Route::resource('resources', ResourceController::class);

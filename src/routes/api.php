<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test', \App\Http\Controllers\Api\V1\TestController::class);

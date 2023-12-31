<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

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

Route:: get('/test-api', [ProjectController::class, 'testApi']);

Route:: get('/projectIndex', [ProjectController::class, 'projectIndex']);

Route::get('/projects/{id}', [ProjectController::class, 'show']);
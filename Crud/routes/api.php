<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//IMPORT CONTROLLER
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LabelContrller;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// ROUTES

Route::get("projects", [ProjectController::class, 'getProjects']);

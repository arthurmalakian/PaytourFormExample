<?php

use App\Http\Controllers\EducationLevel\EducationLevelController;
use App\Http\Controllers\Resume\ResumeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/resume',[ResumeController::class,'index']);
Route::post('/resume',[ResumeController::class,'store']);
Route::get('/education-level',[EducationLevelController::class,'index']);

<?php

use App\Http\Controllers\employeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[employeeController::class,'show']);
Route::get('/{id}',[employeeController::class,'destroy']);
Route::get('add',[employeeController::class,'create']);
Route::post('add',[employeeController::class,'store']);
Route::get('edit/{id}',[employeeController::class,'edit']);
Route::post('edit/{id}',[employeeController::class,'update']);


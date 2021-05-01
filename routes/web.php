<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\WellcomeController;
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

Route::get('/', [WellcomeController::class, 'index']);

Route::get('/lists', [ListsController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);
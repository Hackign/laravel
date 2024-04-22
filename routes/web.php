<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers; 
use App\Http\Controllers\CursoController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeControllers::class); 

Route::get('curso', [CursoController::class, 'index']);
Route::get('curso/create', [CursoController::class, 'create' ]);
Route::get('curso/{curso}', [CursoController::class, 'show']);
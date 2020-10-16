<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/liste', [NavController::class, 'list']);

Route::get('/ajouter', [NavController::class, 'add']);
Route::post('/add', [ActionController::class, 'addOne']);
Route::post('/delete', [ActionController::class, 'deleteOne']);
Route::post('/edit', [NavController::class, 'obtainOne']);
Route::post('/update', [ActionController::class, 'editOne']);


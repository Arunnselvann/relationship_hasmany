<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/fetch-data-from-city',[UserController::class,'fetchDataFromCity'])->name('fetch-data-from-city');
Route::get('/fetch-data-from-name',[UserController::class,'fetchDataFromName'])->name('fetch-data-from-name');
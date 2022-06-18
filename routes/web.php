<?php

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
// TOPページ(検索ページの表示)
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
// 検索内容のPOST
Route::post('/', [\App\Http\Controllers\HomeController::class, 'search']);

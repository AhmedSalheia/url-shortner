<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ShortenerController as Shortener;

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

Route::get('/', [Shortener::class, 'index']);
Route::post('/create', [Shortener::class, 'create']);
Route::get('/{uuid}', [Shortener::class,'open']);

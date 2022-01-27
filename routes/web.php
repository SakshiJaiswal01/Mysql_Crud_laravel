<?php

use App\Http\Controllers\main;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add',[main::class,'add']);
Route::get('/show',[main::class,'show']);
Route::post('/insert',[main::class,'insert']);
Route::get('/edit/{id}',[main::class,'edit']);
Route::post('/update',[main::class,'update']);
Route::get('/delete/{id}',[main::class,'delete']);

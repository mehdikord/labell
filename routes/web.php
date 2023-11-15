<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {

    return view('pages.dashboard');

});

Route::get('news',function (){

   $news = \App\Models\News::with('category')->select(['id','category_id','title'])->get();

    return $news;

});

Route::get('register',[\App\Http\Controllers\AuthController::class,'register'])->name('register');

Route::post('register',[\App\Http\Controllers\AuthController::class,'submit_register'])->name('submit_register');








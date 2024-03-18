<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('view_home');
Route::get('/tim-kiem-khoa-hoc/{slug}',[HomeController::class,'index_search_name'])->name('index_search_name');
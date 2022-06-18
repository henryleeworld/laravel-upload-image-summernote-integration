<?php

use App\Http\Controllers\SummernoteController;
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
Route::get('summernote', [SummernoteController::class, 'index']);
Route::post('summernote/upload', [SummernoteController::class, 'upload'])->name('summernote.upload');

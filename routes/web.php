<?php

use App\Http\Controllers\SummernoteController;
use Illuminate\Support\Facades\Route;

Route::get('summernote', [SummernoteController::class, 'index']);
Route::post('summernote/upload', [SummernoteController::class, 'upload'])->name('summernote.upload');

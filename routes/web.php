<?php

use App\Http\Controllers\FilesStorageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('assets/get', [FilesStorageController::class, 'getImageByPath']);

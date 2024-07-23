<?php

use App\Http\Controllers\FilesStorageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('http://image-cms-app.test');
});

Route::get('assets/get', [FilesStorageController::class, 'getImageByPath']);

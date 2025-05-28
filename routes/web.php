<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create-brand', [DemoController::class, 'CreateBrand'] );
Route::post('/update-brand/{id}', [DemoController::class, 'UpdateBrand'] );
Route::post('/update-or-create-brand/{brandName}', [DemoController::class, 'UpdateOrCreateBrand'] );

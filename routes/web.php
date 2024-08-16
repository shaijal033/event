<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aa',[DynamicController::class,'index']);
Route::post('/bb',[DynamicController::class,'store']);

Route::get('delete_contact/{id}',[DynamicController::class,'contact_delete']);
Route::get('edit_contact/{id}',[DynamicController::class,'contact_edit']);
Route::post('/update_contact',[DynamicController::class,'update_contact']);

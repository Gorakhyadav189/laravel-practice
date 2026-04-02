<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact; // ✅ ADD THIS
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::delete('/contact/delete/{id}', [ContactController::class, 'delete']);
Route::get('/contact/edit/{id}', [ContactController::class, 'edit']);
Route::put('/contact/update/{id}', [ContactController::class, 'update']);
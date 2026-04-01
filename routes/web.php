<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact; // ✅ ADD THIS

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    Contact::create([
        'name' => $request->name,
        'email' => $request->email
    ]);

    return "Data Saved Successfully!";
});
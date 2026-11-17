<?php

use Illuminate\Support\Facades\Route;

// Version 1 (Original - 100% Untouched)
Route::get('/', function () {
    return view('welcome');
});

// Version 2 (Dedicated Multi-Page Architecture based on Ms. Nhung's Feedback)
Route::prefix('v2')->group(function () {
    Route::get('/', function () {
        return view('v2.home');
    });

    Route::get('/services', function () {
        return view('v2.services');
    });

    Route::get('/your-case', function () {
        return view('v2.your-case');
    });

    Route::get('/why-us', function () {
        return view('v2.why-us');
    });

    Route::get('/useful-guide', function () {
        return view('v2.useful-guide');
    });

    Route::get('/faqs', function () {
        return view('v2.faqs');
    });
});

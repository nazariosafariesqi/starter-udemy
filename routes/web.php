<?php

use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('dashboard.home');
    })->name('home');
});

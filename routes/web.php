<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('metronic.apps.dashboards.default');
});

Route::get('/apps', function () {
    return view('metronic.apps.main');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

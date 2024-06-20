<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('metronic.apps.dashboards.default');
});

Route::get('/apps', function () {
    return view('metronic.apps.main');
})->name('app-launcher');


Route::prefix('apps')->group(function (){
   Route::get('user-management', fn() => view('metronic.apps.user-managements.app-user-control.index'))->name('user-management.index');
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

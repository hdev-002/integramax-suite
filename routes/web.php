<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('metronic.apps.dashboards.default');
});

Route::get('/apps', function () {
    return view('metronic.apps.main');
})->name('app-launcher');

Route::resource('user-management', UserController::class);
Route::get('user-management',[UserController::class,'list'])->name('user-management.list');

Route::prefix('apps')->group(function (){
   Route::get('user-management', fn() => view('metronic.apps.user-managements.app-user-control.create'))->name('user-management.index');
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

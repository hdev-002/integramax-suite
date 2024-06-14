<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('metronic.apps.dashboards.default');
});

Route::get('/apps', function () {
    return view('metronic.apps.main');
});

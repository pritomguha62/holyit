<?php

use App\Http\Controllers\PubUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pub_views.home');
})->name('home');

Route::get('/admin_panel', function () {
    return view('admin_views.dashboard');
});

Route::post('/contact_us', [PubUserController::class, 'contact_us']
)->name('contact_us');

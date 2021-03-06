<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use Mediconesystems\LivewireDatatables\Exports\UsersExport;

Route::view('/', 'home')->name('home');

Route::view('/simple', 'simple')->name('simple');
Route::view('/intermediate', 'intermediate')->name('intermediate');
Route::view('/complex', 'complex')->name('complex');
Route::view('/relation', 'relation')->name('relation');
Route::view('/deletable', 'deletable')->name('deletable');

Route::middleware('guest')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
});

Route::view('password/reset', 'auth.passwords.email')->name('password.request');
Route::get('password/reset/{token}', 'Auth\PasswordResetController')->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::view('email/verify', 'auth.verify')->middleware('throttle:6,1')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')->middleware('signed')->name('verification.verify');

    Route::post('logout', 'Auth\LogoutController')->name('logout');

    Route::view('password/confirm', 'auth.passwords.confirm')->name('password.confirm');
});

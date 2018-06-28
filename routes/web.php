<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 首頁
Route::get('homepage', function () {
    return view('homepage.homepage');
});

// 個人資料
Route::get('profile', function () {
    return view('profile.index');
});

// 品評單專區
Route::get('certificate', function () {
    return view('certificate.index');
});

// 品評單
Route::get('form_normal', function () {
    return view('form.form_normal');
});
Route::get('form_professional', function () {
    return view('form.form_professional');
});
Route::get('form_business', function () {
    return view('form.form_business');
});
Route::get('form_business/vertification', function () {
    return view('form.vertification');
});
Route::get('form_successful', function () {
    return view('form.successful');
});

// 帳號登入
Route::get('login', function () {
    return view('login.index');
});
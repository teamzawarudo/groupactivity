<?php

use Illuminate\Support\Facades\Route;

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
//localhost:8000
Route::get('/', function () {
    return view('homepage');
});
//localhost:8000/homepage
Route::get('/homepage', function () {
    return view('homepage');
});
//localhost:8000/about
Route::get('/about', function () {
    return view('about');
});
//localhost:8000/contact
Route::get('/contact', function () {
    return view('contact');
});
//localhost:8000/login
Route::get('/login', function () {
    return view('login');
});
//localhost:8000/register
Route::get('/register', function () {
    return view('register');
});
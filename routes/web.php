<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\dashboard;


Route::get('/', function () {
    return view('english/home');
});

Route::get('/hajj', function () {
    return view('english/Hajj');
});

Route::get('/landmark', function () {
    return view('english/landmark');
});
Route::get('/umrah', function () {
    return view('english/Umrah');
});
Route::get('/contact', function () {
    return view('contact');
});



//////Arabic////////

Route::get('/ar/home', function () {
    return view('ar/home');
});

Route::get('/ar/hajj', function () {
    return view('ar/Hajj');
});

Route::get('/ar/landmark', function () {
    return view('ar/landmark');
});
Route::get('/ar/umrah', function () {
    return view('ar/Umrah');
});







Route::post('/addMessage',[dashboard::class,'addMessage']);



Route::get('/register', function () {
    return view('auth.register');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard',[dashboard::class,'index']);
    Route::get('/changeStatus/{id}',[dashboard::class,'changeStatus']);
    Route::get('/message/{id}',[dashboard::class,'message']);




});

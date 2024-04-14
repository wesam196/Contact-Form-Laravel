<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\dashboard;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::post('/addMessage',[dashboard::class,'addMessage']);

//Route::get('/',  [homeController::class,'index'])->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard',[dashboard::class,'index']);
    Route::get('/changeStatus/{id}',[dashboard::class,'changeStatus']);
    Route::get('/message/{id}',[dashboard::class,'message']);
    Route::get('/register',[dashboard::class,'register']);
    Route::post('/createUser',[dashboard::class,'createUser']);



});

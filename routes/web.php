<?php
use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth','admin');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add(['GET', 'POST'], '/add_personal', [Controller\Site::class, 'add_personal'])
    ->middleware('auth','admin');
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['POST','GET'], '/glavnaya', [Controller\Site::class, 'glavnaya']);
Route::add(['GET','POST'], '/proverka', [Controller\Site::class, 'proverka'])
    ->middleware('auth',);

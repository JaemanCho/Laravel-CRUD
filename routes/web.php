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
    
    $books = [
        'Harry Potter',
        'Laravel'
    ];

    // 方法1
    return view('welcome', [
        'books' => $books
    ]);

    // 方法2
    return view('welcome')->with([
        'books' => $books
    ]);
    // 方法3
    return view('welcome')->withBooks($books);

    
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/contact', function () {
    return view('contact');
});
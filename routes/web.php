<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view(
        'about', 
        [
            "title" => "About",
        ]
    );
});
Route::get('/', function() {
    return view(
        'home',
        [
            "title" => "Home",
        ]
    );  
});
Route::get('/contact', function() {
    return view(
        'contact',
        [
            "title" => "Contact",
        ]
    );  
});
Route::get('/posts', function() {
    return view(
        'posts',
        [
            "title" => "Blog",
        ]
    );  
});
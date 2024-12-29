<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view(
        'about',
        [
            "title" => "About",
        ]
    );
});
Route::get('/', function () {
    return view(
        'home',
        [
            "title" => "Home",
        ]
    );
});
Route::get('/contact', function () {
    return view(
        'contact',
        [
            "title" => "Contact",
        ]
    );
});
Route::get('/posts', function () {
    return view(
        'posts',
        [
            "title" => "Blog",
            "posts" => Post::all(),
        ],


    );
});

Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view(
        'post',
        [
            'title' => $post['title'],
            'post' => $post
        ]
    );
});

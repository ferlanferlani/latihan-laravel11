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
            "posts" => [
                [
                    "id" => 1,
                    "title" => "Judul Postingan Pertama",
                    "category" => "Finance",
                    "slug" => "judul-postingan-pertama",
                    "author" => "Ferlan Ferlani",
                    "date" => "2 Januari 2025",
                    "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur",
                    "body" => " officia maiores Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.",
                    "image" => "https://img.freepik.com/premium-photo/blue-technology-background-abstract-digital-tech-circlecopy-space-isolated-with-white_660230-166389.jpg"
                ],
                [
                    "id" => 2,
                    "title" => "Judul Postingan Ke Dua",
                    "category" => "Personal",
                    "slug" => "judul-postingan-ke-dua",
                    "author" => "Ferlan Ferlani",
                    "date" => "2 Januari 2025",
                    "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.",
                    "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.",
                    "image" => "https://img.freepik.com/premium-photo/blue-technology-background-abstract-digital-tech-circlecopy-space-isolated-with-white_660230-166389.jpg"
                ],
            ]
        ],
        
        
    );  
});

Route::get('/posts/{slug}', function($id) {
    
    // array data
    $posts = [
        [
            "id" => 1,
            "title" => "Judul Postingan Pertama",
            "category" => "Finance",
            "slug" => "judul-postingan-pertama",
            "author" => "Ferlan Ferlani",
            "date" => "2 Januari 2025",
            "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur",
            "body" => " officia maiores Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.",
            "image" => "https://img.freepik.com/premium-photo/blue-technology-background-abstract-digital-tech-circlecopy-space-isolated-with-white_660230-166389.jpg"
        ],
        [
            "id" => 2,
            "title" => "Judul Postingan Ke Dua",
            "category" => "Personal",
            "slug" => "judul-postingan-ke-dua",
            "author" => "Ferlan Ferlani",
            "date" => "2 Januari 2025",
            "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere fuga aliquam excepturi suscipit in, inventore aperiam perferendis ad earum aliquid accusantium ut adipisci voluptatum veritatis odit labore harum totam impedit reprehenderit, tempore cum! Nemo quod sit aliquam consectetur officia maiores.",
            "image" => "https://img.freepik.com/premium-photo/blue-technology-background-abstract-digital-tech-circlecopy-space-isolated-with-white_660230-166389.jpg"
        ],
    ];

    $post = Arr::first($posts, function($post) use($id) {
        return $post['slug'] == $id;
    });

    return view(
        'post',
        [
            'title' => $post['title'],
            'post' => $post
        ]
    );
    
});
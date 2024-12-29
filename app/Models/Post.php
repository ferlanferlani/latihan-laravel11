<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    // find post by slug
    public static function find($slug): array
    {
        // return Arr::first(Post::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // method 2
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}

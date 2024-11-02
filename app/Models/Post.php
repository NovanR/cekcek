<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return
            [
                [
                    'id' => 1,
                    'slug' => 'judul-artikel-1',
                    'title' => 'Judul Artikel 1',
                    'author' => 'Novan Ramdan',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio vitae exercitationem
                    nihil,
                    cumque tenetur
                    quam blanditiis dolores nesciunt? Asperiores tempore pariatur, dolore vero numquam id tenetur delectus magni
                    deserunt quis.'
                ],
                [
                    'id' => 2,
                    'slug' => 'judul-artikel-2',
                    'title' => 'Judul Artikel 2',
                    'author' => 'Novan Ramdan',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio vitae exercitationem
                    nihil,
                    cumque tenetur
                    quam blanditiis dolores nesciunt? Asperiores tempore pariatur, dolore vero numquam id tenetur delectus magni
                    deserunt quis.'
                ]
            ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
};

<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Novan Ramdan', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Kontak Page']);
});

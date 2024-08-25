<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Halaman Beranda', 'titlepage' => 'Halaman Beranda']);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Muhamad Ariel Septiadi',
        'title' => 'Halaman Tentang',
        'titlepage' => 'Halaman Tentang'
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Halaman Kontak', 'titlepage' => 'Halaman Kontak']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Halaman Blog', 'titlepage' => 'Halaman Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post) {
    // $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post, 'titlepage' => $post['title']]);
});

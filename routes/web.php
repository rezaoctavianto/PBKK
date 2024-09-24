<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page', 
        'name' => 'Reza Octa'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
        'email' => 'rezaoctavianto710@gmail.com',
        'number' => '0812-xxxx-xxxx'
    ]);
});


/*add 2 route
1. Blog of 2 article
2. contact
*/
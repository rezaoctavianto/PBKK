<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page', 
        'name' => 'Reza Octa'
    ]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
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
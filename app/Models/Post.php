<?php

namespace App\Models;
use illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'w-130-institut-teknologi',
                'title' => 'W-130 Institut Teknologi',
                'author' => 'Reza Octa',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus officia, ducimus unde neque dolore iusto dolores molestias nam id vero incidunt tenetur assumenda doloribus nobis veniam eligendi, reprehenderit distinctio possimus.' 
            ],
            [
                'id'=> 2,
                'slug' => 'golf-event-its-x-ub',
                'title' => 'Golf Event ITS x UB',
                'author' => 'Reza Octa',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi similique reprehenderit repellat veniam quas, alias dicta itaque autem, esse doloribus velit vitae harum, dolorum veritatis a quia repellendus doloremque laudantium.' 
            ],
            [
                'id'=> 3,
                'slug' => 'friendly-match-ub-golf',
                'title' => 'Friendly Match UB Golf',
                'author' => 'Reza Octa',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore consectetur architecto necessitatibus magnam, veniam rerum porro, temporibus ex officia, repellendus unde recusandae at dolorem optio placeat pariatur aliquid quo. Rem.' 
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {  
            abort(404);
        } 

        return $post;
    }
}
<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

        <article class="py-10 max-w-screen-md">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-black-500">{{ $post['title'] }}</h2>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | {{$post -> created_at -> diffForHumans()}}
            </div>
            <p>{{ $post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog </a>
        </article>

</x-layout>
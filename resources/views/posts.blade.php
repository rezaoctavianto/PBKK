<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    @foreach ( $posts as $post )
        <article class="py-10 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-black-500">{{ $post['title'] }}</h2>
        </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 07 October 2003
            </div>
            <p>{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo; </a>
        </article>
    @endforeach
</x-layout>
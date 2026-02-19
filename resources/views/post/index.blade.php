<x-layout :title="$pageTitle">
    <h1>blog</h1>
    @foreach ($posts as $post)
    <h2 class="text-2xl">{{ $post->title }}</h2>
    <p class="text-1xl">{{ $post->author }}</p>
    <p>{{ $post->body }}</p>
    @endforeach
    {{ $posts->links() }}
</x-layout>

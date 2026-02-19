<x-layout :title="$pageTitle">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
        <ul>
        @foreach ($post->comments as $comment)
        <li>{{ $comment->content }} , {{ $comment->author }} </li>
        @endforeach
    </ul>
</x-layout>

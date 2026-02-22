<x-layout :title="$pageTitle">
    <h2>Comment By: {{ $comment->author }}</h2>
    <p>{{ $post->content }}</p>
    @if ($comment->post)
    <h3>Related Posts</h3>
    <ul>
        <li>
            <strong>{{ $comment->post->title }}</strong>
            <p>{{ $comment->post->body }}</p>
            <p>Author: {{ $comment->post->author }}</p>
            <a href="{{ route('blog.show',$comment->post->id) }}">View Full Post</a>
        </li>
    </ul>
    @else
        <p>No Posts are associated with this tag.</p>
    @endif
</x-layout>

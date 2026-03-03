<x-layout :title="$pageTitle">
    @if (session('success'))
        <div class="bg-green-50 px-3 py-2">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/blog/create"
            class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Create</a>
    </div>
    @foreach ($posts as $post)
        <div class="flex justify-between icons-center border border-gray-200 px-4 py-6 my-2">
            <div>
                <h2 class="text-2xl">
                    <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class="text-1xl">{{ $post->author }}</p>
            </div>
            <div>
                <a class="text-yellow-500 hover:text-gray-500" href="/blog/{{ $post->id }}/edit">Edit</a>
                <form method="POST" action="/blog/{{ $post->id }}"
                    onsubmit="return confirm('are you sure, this cannot be reversed?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500 hover:text-gray-500" href="">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    {{ $posts->links() }}
</x-layout>

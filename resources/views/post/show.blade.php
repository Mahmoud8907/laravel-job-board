<x-layout :title="$pageTitle">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
    <ul class="nt-6 space-y-4">
        @foreach ($post->comments as $comment)
            <li class="p-4 bg-gray-100 rounded-md shadow-sm">
                <p class="text-gray-800">{{ $comment->content }}</p>
                <span class="mt-1 text-sm text-gray-600">{{ $comment->author }}</span>
            </li>
        @endforeach
    </ul>
    <div class="border border-gray-300 px-3 py-2 mt-2">
        <form method="POST" action="/comments" class="mt-8">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="space-y-6">

                <div>
                    <label for="author" class="block text-sm font-medium text-gray-900">Your Name</label>
                    <div class="mt-2">
                        <input id="author" value="{{ old('author') }}" type="text" name="author"
                            autocomplete="family-name"
                            class="{{ $errors->has('author') ? 'outline-red-500 focus:outline-red-600' : 'outline-gray-500' }}block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 placeholder:text-white-500 focus:outline-indigo-500 focus:outline-2 focus:-outline-offset-2 sm:text-sm" />
                    </div>
                    @error('author')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>


                <div>
                    <label for="content" class="block text-sm font-medium text-gray-900">Your Comment</label>
                    <div class="mt-2">
                        <textarea id="content" name="content" rows="4"
                            class="{{ $errors->has('comment') ? 'outline-red-500 focus:outline-red-600' : 'outline-gray-500' }}block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 placeholder:text-white-500 focus:outline-indigo-500 focus:outline-2 focus:-outline-offset-2 sm:text-sm">
                              {{ old('content')}}
                        </textarea>
                    </div>
                    @error('content')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Add content
                </button>
            </div>
        </form>
    </div>
</x-layout>

<div>
    <h1>Hello</h1>
    <h2>welcome to my website</h2>

    @foreach ($jobs as $job)
    <div>{{ $job['title'] }} : {{ $job['salary'] }}</div>
    @endforeach
</div>

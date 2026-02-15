<div>
    <h1>Hello</h1>

    @foreach ($jobs as $job)
    <div>{{ $job['title'] }} : {{ $job['salary'] }}</div>
    @endforeach
</div>

<h1>{{ $heading }}</h1>

{{-- Directives --}}
@foreach($jobs as $job)
    <h2>{{ $job['title'] }}</h2>
    <p>{{ $job['description'] }}</p>
@endforeach
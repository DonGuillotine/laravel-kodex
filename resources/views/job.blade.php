<h1>{{ $heading }}</h1>

@php
    $hello = "Donald"
@endphp

{{-- Directives --}}
@foreach($jobs as $job)
    <h2>{{ $job['title'] }}</h2>
    <p>{{ $job['description'] }}</p>
    <b>{{ $hello }}</b>
@endforeach
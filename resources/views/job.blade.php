<h1>{{ $heading }}</h1>

{{-- Directives --}}

@php
    $hello = "Donald"
@endphp

@if (count($jobs) == 0)
    <p style="color: red">No Jobs Available</p>
@endif


@foreach($jobs as $job)
    <h2>{{ $job['title'] }}</h2>
    <p>{{ $job['description'] }}</p>
    <b>{{ $hello }}</b>
@endforeach
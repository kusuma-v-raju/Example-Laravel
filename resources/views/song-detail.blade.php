@extends('mytemplate')

@section('title', 'Song Detail')

@section('content')

    <h2>Song Detail</h2>

    @if (!empty($mysong))
        {{-- {{dd ($mysong)}} --}}
        <p>Name : {{ $mysong->title }}</p>
        <p>Release Date : {{ $mysong->release_date }}</p>
        <hr>
    @else
        <p>No song found.</p>
    @endif


@endsection

@extends('layouts.app')

@section('title', 'My Movies')

@section('content')

    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>

@endsection

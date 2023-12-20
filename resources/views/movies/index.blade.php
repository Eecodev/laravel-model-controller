@extends('layouts.app')

@section('title', 'My Movies')

@section('content')
    <main>
        <section class="container">
            <h1>Movies</h1>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img class="dc-img" src="{{$movie->image}}" alt="{{ $movie->title }}">
                            <div class="card-body">
                                <h5 class="card-title">Title: {{$movie->original_title}}</h5>
                                <div class="d-flex align-items-center">
                                    <span class="">Rate: {{ $movie->vote}}</span>
                                    <a href="#" class="btn btn-dark my-btn-size ">Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection

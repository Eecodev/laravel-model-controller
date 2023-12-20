@extends('layouts.app')

@section('title', 'My Movies')

@section('content')
    <main>
        <section class="container">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img class="dc-img" src="{{$movie->image}}" alt="{{ $movie->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{$movie->title}}</h5>
                                <p class="card-title">{{ $movie->original_title }}</p>
                                <a href="#" class="btn btn-success">Info</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection

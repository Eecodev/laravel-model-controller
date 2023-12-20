@extends('layouts.app')

@section('title', 'My Books')

@section('content')
    <main>
        <section class="container">
            <h1>Books</h1>
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img class="dc-img" src="{{$book->cover_image}}" alt="{{ $book->title }}">
                            <div class="card-body">
                                <h5 class="card-title">Title: {{$book->title}}</h5>
                                <p class="card-title">{!! substr($book->plot, 0, 100) . '...' !!}</p>
                                <a href="#" class="btn btn-dark my-btn-size">Info</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection

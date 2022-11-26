@extends('layout')

@section('content')

    @foreach ($publishers as $publisher)
        <div class="container w-50 bg-secondary p-0 mt-3">
            <p class="text-light mb-1">{{ $publisher->name }}</p>
            <p class="text-light mb-1">Address - {{ $publisher->address }}</p>
            <p class="text-light mb-1">Phone - {{ $publisher->phone }}</p>
            <p class="text-light mb-1">Email - {{ $publisher->email }}</p>
        </div>

        <div class="container w-50 p-0 mb-3">
            <div class="row g-1">
                @foreach ($publisher->books as $book)
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card mb-1">
                            <img src="{{ $book->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">by</p>
                            <p class="card-text">{{ $book->author }}</p>
                            <a href="/books/{{ $book->id }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

@endsection

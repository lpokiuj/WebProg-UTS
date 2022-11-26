@extends('layout')

@section('content')

    <div class="container w-50 bg-secondary p-0 mt-3">
        <h3 class="text-light fw-normal">Book List</h3>
    </div>

    <div class="container w-50 p-0">

        <div class="row g-1">
            @foreach ($books as $book)
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

@endsection

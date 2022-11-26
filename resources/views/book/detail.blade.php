@extends('layout')

@section('content')

    <div class="container w-50 bg-secondary p-0 mt-3">
        <h3 class="text-light fw-normal">Book Detail</h3>
    </div>

    <div class="container w-50 p-0 mt-3 mb-1">
        <div class="card">
            <img src="{{ $book->image }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Title: {{ $book->title }}</p>
              <p class="card-text">Author: {{ $book->author }}</p>
              <p class="card-text">Publisher: {{ $book->publisher->name }}</p>
              <p class="card-text">Year: {{ $book->year }}</p>
              <p class="card-text">Synopsis:</p>
              <p class="card-text">{{ $book->synopsis }}</p>
            </div>
        </div>
    </div>
@endsection

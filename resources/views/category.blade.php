@extends('layout')

@section('content')

    @foreach ($category->books as $book)
        <p>{{ $book }}</p>
    @endforeach

@endsection

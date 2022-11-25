@extends('layout')

@section('content')

    @foreach ($books as $book)
        <p>{{ $book }}</p>
    @endforeach

@endsection

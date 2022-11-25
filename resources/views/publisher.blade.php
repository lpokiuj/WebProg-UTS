@extends('layout')

@section('content')

    @foreach ($publishers as $publisher)
        <p>{{ $publisher->name }}</p>
    @endforeach

@endsection

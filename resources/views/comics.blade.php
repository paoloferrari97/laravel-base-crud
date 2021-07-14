@extends('layout.app')

@section('main')
    <h1>Comics</h1>
    <ol>
        @foreach ($comics as $comic)
            <li>{{ $comic->title }}</li>
        @endforeach
    </ol>
@endsection

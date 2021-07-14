@extends('layout.app')

@section('main')
    <ol>
        <li>Id: {{ $comic->id }}</li>
        <li>Title: {{ $comic->title }}</li>
        <li>Description: {{ $comic->description }}</li>
        <li>Price: {{ $comic->price }}</li>
        <li>Released_at: {{ $comic->released_at }}</li>
    </ol>
@endsection

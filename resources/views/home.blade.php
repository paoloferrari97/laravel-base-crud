@extends('layout.app')

@section('main')
    <h1>Home</h1>
    <ol>
        <li><a href="{{ route('comics.index') }}">Comics</a></li>
        <li><a href="{{ route('comics.create') }}">Create Comic</a></li>
    </ol>
@endsection

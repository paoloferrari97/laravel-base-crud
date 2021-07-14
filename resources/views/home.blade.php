@extends('layout.app')

@section('main')
    <h1>Home</h1>
    <a href="{{ route('comics.index') }}">Comics</a>
@endsection

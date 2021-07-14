@extends('layout.app')

@section('main')

    <form action="{{ route('comics.store') }}" method="post">

        @csrf

        <label for="title">Title</label>
        <input type="text" name='title' id='title'>

        <label for="description">Description</label>
        <input type="text" name='description' id='description'>

        <label for="price">Price</label>
        <input type="number" step="0.01" name='price' id='price'>

        <label for="released_at">Released_at</label>
        <input type="date" name='released_at' id='released_at'>

        <input type="submit" value="Crea">

    </form>

@endsection

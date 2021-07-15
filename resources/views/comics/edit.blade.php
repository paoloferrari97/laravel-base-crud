@extends('layout.app')

@section('main')

    <form action="{{ route('comics.update', $comic->id) }}" method="post">

        @csrf

        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name='title' id='title' value='{{ $comic->title }}'>

        <label for="description">Description</label>
        <input type="text" name='description' id='description' value='{{ $comic->description }}'>

        <label for="price">Price</label>
        <input type="number" step="0.01" name='price' id='price' value='{{ $comic->price }}'>

        <label for="released_at">Released_at</label>
        <input type="date" name='released_at' id='released_at' value='{{ $comic->released_at }}'>

        <input type="submit" value="Modifica">
        {{-- o button con type="submit" (con button posso mettere emoticons e qualsiasi altra roba) --}}

    </form>

@endsection

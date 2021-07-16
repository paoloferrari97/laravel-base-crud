@extends('layout.app')

@section('main')
    <ol>
        <li>Id: {{ $comic->id }}</li>
        <li>Title: {{ $comic->title }}</li>
        <li>Description: {{ $comic->description }}</li>
        <li>Price: {{ $comic->price }}</li>
        <li>Released_at: {{ $comic->released_at }}</li>

        <form action="{{ route('comics.destroy', $comic->id) }}" method='post'>
            @csrf
            @method('DELETE')
            <button type="submit" @click="cancel($event)" class="btn btn-danger">!DELETE!</button>
        </form>

    </ol>
@endsection

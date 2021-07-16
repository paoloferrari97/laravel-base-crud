@extends('layout.app')

@section('main')

    <h1 class="text-center">Modifica fumetto</h1>

    <div class="container">

        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ $comic->title }}">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" rows="3">{{ $comic->description }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ $comic->price }}">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="released_at">Released_at</label>
                <input type="date" class="form-control @error('released_at') is-invalid @enderror" id="released_at"
                    name="released_at" value="{{ $comic->released_at }}">
            </div>
            @error('released_at')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>

    </div>

@endsection

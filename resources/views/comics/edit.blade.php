@extends('layout.app')

@section('main')

    <div class="container">

        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"
                    rows="3">{{ $comic->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="form-group">
                <label for="released_at">Released_at</label>
                <input type="date" class="form-control" id="released_at" name="released_at"
                    value="{{ $comic->released_at }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>

    </div>

@endsection

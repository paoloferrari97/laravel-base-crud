@extends('layout.app')

@section('main')

    {{-- <form action="{{ route('comics.store') }}" method="post">

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

    </form> --}}

    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci qui il titolo!">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    placeholder="Inserisci qui la descrizione!"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price"
                    placeholder="Inserisci qui il prezzo!">
            </div>
            <div class="form-group">
                <label for="released_at">Released_at</label>
                <input type="date" class="form-control" id="released_at" name="released_at">
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>

@endsection

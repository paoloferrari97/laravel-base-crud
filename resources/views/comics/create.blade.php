@extends('layout.app')

@section('main')

    <h1 class="text-center">Modifica fumetto</h1>

    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    placeholder="Inserisci qui il titolo!" value="{{ old('title') }}">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" rows="3"
                    placeholder="Inserisci qui la descrizione!">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" placeholder="Inserisci qui il prezzo!" value="{{ old('price') }}">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="released_at">Released_at</label>
                <input type="date" class="form-control @error('released_at') is-invalid @enderror" id="released_at"
                    name="released_at" value="{{ old('released_at') }}">
            </div>
            @error('released_at')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>

@endsection

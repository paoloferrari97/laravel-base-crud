@extends('layout.app')

@section('main')
    <h1>Comics</h1>
    {{-- <div id="app"> --}}
    <table style="width:100%">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Released_at</th>
            <th>Action</th>
        </tr>
        @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->released_at }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}">View</a> | <a
                        href="{{ route('comics.edit', $comic->id) }}">Edit</a> | <form
                        action="{{ route('comics.destroy', $comic->id) }}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button type="submit" @click="cancel()">!DELETE!</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- </div> --}}
@endsection

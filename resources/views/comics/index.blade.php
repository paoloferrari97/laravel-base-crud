@extends('layout.app')

@section('main')
    <h1>Comics</h1>
    <table style="width:100%">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Released_at</th>
        </tr>
        @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->released_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection

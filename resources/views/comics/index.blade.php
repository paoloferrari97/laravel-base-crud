@extends('layout.app')

@section('main')
    <h1 class="text-center">Comics</h1>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Released_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->released_at }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}">View</a> | <a
                                href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method='post'>
                                @csrf
                                @method('DELETE')
                                <button type="submit" @click="cancel($event)" class="btn btn-danger">!DELETE!</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mb-5">
            DC Comics
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>EDIT

                        </td>
                        <td>DELETE</td>
                        <td>
                            <a class="btn btn-primary"href="{{ route('comics.show',$comic->id) }}">SHOW</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $comics->links() }}
    </div>
@endsection

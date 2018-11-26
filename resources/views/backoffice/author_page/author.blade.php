@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Indice autori</h2>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>twitter</th>
                <th>is_active</th>
                <th>Creato il: </th>
                <th>edit</th>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->fullname() }}</td>
                        <td>{{ $author->description }}</td>
                        <td>{{ $author->twitter_handle }}</td>
                        <td>{{ $author->is_active }}</td>
                        <td>{{ $author->created_at }}</td>
                        <td><a href="{{ route('admin.author.edit', ['author' => $author->id ]) }} ">EDIT</a></td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

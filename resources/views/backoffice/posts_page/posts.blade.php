@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Contenuto</th>
                <th>Autore</th>
                <th>Is_active</th>
                <th>Categoria</th>
                <th>Creato il: </th>
                <th>edit</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->author->fullname() }}</td>
                        <td>{{ $post->is_active }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td><a href="{{ route('admin.posts.edit', ['post' => $post->id ]) }} ">EDIT</a></td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

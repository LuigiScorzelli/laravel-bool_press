@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <h2>inserisci un nuovo post</h2>
            <button type="button" name="button" class="btn btn-info">
                <a href=" {{ route('admin.create') }}">CREA</a>
            </button>
        </div>
    </div>

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
                <th>delete</th>
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
                        <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i:s') }}</td>
                        <td>
                            <button type="button" name="button" class="btn btn-info">
                                <a href="{{ route('admin.posts.edit', ['post' => $post->id ]) }} ">EDIT</a>
                            </button>
                        </td>
                        <td>
                            <button type="button" name="button" class="btn btn-danger">
                                <a href=" {{ route('admin.posts.delete', ['post' => $post->id ])}}">DELETE</a>
                            </button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

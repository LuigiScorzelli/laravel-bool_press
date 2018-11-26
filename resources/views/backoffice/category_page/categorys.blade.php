@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Indice categorie</h2>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Is_active</th>
                <th>Creato il: </th>
                <th>edit</th>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->is_active }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td><a href="{{ route('admin.categorys.edit', ['category' => $category->id ]) }} ">EDIT</a></td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h2>inserisci una nuova categoria</h2>
            <button type="button" name="button" class="btn btn-info">
                <a href=" {{ route('admin.category.create') }}">CREA</a>
            </button>
        </div>
    </div>

    <div class="container">
        <h2>Indice categorie</h2>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Is_active</th>
                <th>Creato il: </th>
                <th>EDIT</th>
                <th>DELETE</th>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->is_active }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <button class="btn btn-info" type="button" name="button">
                                <a href="{{ route('admin.categorys.edit', ['category' => $category->id ]) }} ">EDIT</a></td>
                            </button>
                        <td>
                            <td>
                                <button class="btn btn-danger" type="button" name="button">
                                    <a href="{{ route('admin.categorys.delete', ['category' => $category->id ]) }} ">delete</a></td>
                                </button>
                            </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

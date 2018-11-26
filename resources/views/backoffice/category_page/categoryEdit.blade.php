@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica un post</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <form class="form-group" method="post" action="{{route('admin.categorys.edit', ['category'=>$category->id])}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Titolo</label>
                        <input type="text" value="{{$category->name}}" name="name" placeholder="Inserisci il titolo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" placeholder="Inserisci una descrizione" rows="8" cols="80" class="form-control">{{$category->description}}</textarea>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Salva" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection

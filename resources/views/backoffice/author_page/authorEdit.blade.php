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
                <form class="form-group" method="post" action="{{route('admin.author.edit', ['author'=>$authors->id])}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="first_name">name</label>
                        <input type="text" value="{{$authors->first_name}}" name="first_name" placeholder="Inserisci il titolo" class="form-control" required>

                        <label for="last_name">cognome</label>
                        <input type="text" value="{{$authors->last_name}}" name="last_name" placeholder="Inserisci il titolo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" placeholder="Inserisci una descrizione" rows="8" cols="80" class="form-control">{{$authors->description}}</textarea>
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

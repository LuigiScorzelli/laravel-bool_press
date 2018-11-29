@extends('layouts.app')

@section('content')
    <div class="container border rounded">
        <div class="row">
            <div class="form-group col-12">
                <form method="post" action="{{ route('admin.save') }}">
                    {{ csrf_field() }}
                    
                        <label for="title"><h3>titolo</h3></label>
                        <input class="form-control" type="text" name="title" placeholder="inserisci un titolo" required/>

                        <label for="content"><h3>contenuto</h3></label>
                        <input class="form-control" type="text" name="content" placeholder="inserisci il testo dell'articolo" required/>

                        <label for="author_id">Seleziona l'autore</label>
                        <select  name="author_id">

                            @foreach ($authors as $author)

                                <option value="{{ $author->id }}">{{ $author->fullname() }}</option>
                            @endforeach
                        </select>

                        <label for="category_id">Seleziona la categoria</label>
                        <select  name="category_id">

                            @foreach ($categorys as $category)

                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>


                <div class="box-button">
                    <button type="submit" name="button" class="btn-save">Salva</button>
                </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container border rounded">
    <div class="row">
        <div class="form-group col-12">
            <form method="post" action="{{ route('admin.category.save') }}">
                {{ csrf_field() }}

                    <label for="name"><h3>nome</h3></label>
                    <input class="form-control" type="text" name="name" placeholder="inserisci il nome della categoria" required/>

                    <label for="description"><h3>descrizione</h3></label>
                    <input class="form-control" type="text" name="description" placeholder="inserisci la descrizione" required/>


            <div class="box-button">
                <button type="submit" name="button" class="btn-save">Salva</button>
            </div>

            </form>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('content')
    <div class="container border rounded">
        <div class="row">
            <h1>inserisci un nuovo autore</h1>
            <div class="box-form col-12">
                <form method="post" action="">
                    {{ csrf_field() }}

                    <label for="first_name">nome</label>
                    <input  class="form-control" type="text" name="first_name" placeholder="inserisci il nome nome"></input>

                    <label for="last_name">cognome</label>
                    <input class="form-control" type="text" name="last_name" placeholder="inserisci il cognome"></input>

                    <label for="description">descrizione</label>
                    <input class="form-control" type="text" name="description" placeholder="inserisci la descrizione"></input>

                    <div class="box-button">
                        <button type="submit" name="button" class="btn-save">Salva</button>
                    </div>

                    </form>
                </form>
            </div>
        </div>
    </div>
@endsection

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
          {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif --}}

            <div class="col-12">
                <form class="form-group" method="post" action="{{route('admin.posts.edit', ['post'=>$post->id])}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" value="{{$post->title}}" name="title" id="title" placeholder="Inserisci il titolo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Descrizione</label>
                        <textarea name="content" placeholder="Inserisci una descrizione" rows="8" cols="80" class="form-control">{{$post->content}}</textarea>
                    </div>

                    {{-- <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <input type="text" value="{{$post->slug}}" name="category_id" id="category_id" placeholder="Inserisci il titolo" class="form-control" required>
                    </div> --}}

                    <div class="form-group">
                        <label for="post_type">Post Type</label>
                        <select name="post_type">
                          <option value="NA" disabled>--Seleziona--</option>
                          <option value="hot_post" @if ($post->type == "hot_post") selected @endif>Hot Post</option>
                          <option value="side_post" @if ($post->type == "side_post") selected @endif>Side Post</option>
                          <option value="normal" @if ($post->type == "normal") selected @endif>Normal</option>
                        </select>
                    </div>

                    {{-- <div class="form-group">
                        <label for="author">Autore</label>
                        <input type="text" value="{{$post->author->fullname() }}" name="author" id="author" placeholder="Inserisci il titolo" class="form-control" required>
                    </div> --}}


                    <div class="form-group">
                        <input type="submit" value="Salva" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection

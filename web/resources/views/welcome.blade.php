@extends('layout')

@section('contenu')

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">VENTE RETRO GAMING</h1>
      <p class="lead my-3">vous avez grandis, vous êtes maintenant un adulte ou vous êtes encore un enfant qui a retrouvé les vieux jeux de vos parents et vous ne savez plus quoi en faire</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Venez vendre ici</a></p>
    </div>
  </div>
  @php

     $posts = DB::select('SELECT * FROM posts');
  @endphp
 
  <div class="row mb-2">
    @foreach ($posts as $post)
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-3 text-success">{{ $post->title }}</strong>
            <p class="mb-auto text-muted">{{ $post->description }}</p>
            <strong class="mb-auto font-weight-normal text-secondary text-danger">{{ $post->price }}</strong>
            <a class="btn btn-warning" href="{{ route('posts.show',$post->id) }}">Show</a>
          </div>
          
          <div class="col-auto d-none d-lg-block">
            <img src="{{ Storage::url($post->image) }}" height="200" width="200" alt="" />
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection
@extends('layout')

@section('contenu')
    @foreach($users as $user)
        <a href="{{ route('Show.User', ['id' => $user->id]) }}"> {{ $user->email }} </a><br>
        {{ $user->name }} <br><br>
    @endforeach
@endsection
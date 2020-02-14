@extends('layouts.app')

@section('content')
    @can('edit_post', $post)
        <div class="container">
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Autor: {{$post->user->name}}</b>
            <hr>
        </div>
    @endcan
    @cannot('edit_post', $post)
        <p class="alert alert-danger">Edição nao autorizada para este usuario.</p>
    @endcan
@endsection

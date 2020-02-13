@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $post)
        @can('view_post', $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Autor: {{$post->user->name}}</b>
                @can('update-post', $post)
                    <a href="{{url("/post/$post->id/update")}}">Editar</a>
                @endcan
            <hr>
        @endcan
    @empty
        <p>Nenhum Post Cadastrado</p>
    @endforelse
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>
        <strong>Author: {{$post->user->name}}</strong>
        ( <a href="post/{{$post->id}}/update">Editar</a> )
        <hr>
    @empty
        <p>Nenhum post encontrado</p>
    @endforelse
</div>
@endsection

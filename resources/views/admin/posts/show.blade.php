@extends('admin.layouts.app')
@section('title', 'Detalhes do Post')    



@section('content')

<h1>Detalhes do Posts {{$post->title}}</h1>
<ul>
    <li><strong> Titulo: </strong>{{$post->title}}</li>
    <li><strong> Conteúdo: </strong>{{$post->content}}</li>
</ul>

<form action="{{route('posts.destroy', $post->id)}}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar {{$post->title}}</button>
    
</form>
@endsection
@extends('admin.layouts.app')

@section('title', 'Editar Post')

@section('content')

<h1>Editar o post <strong>{{$post->title}}</strong></h1>


<form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">

  @method('PUT')

  @include('admin.posts._partials.form')

</form>
@endsection
    

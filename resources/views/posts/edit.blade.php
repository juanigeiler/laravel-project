@extends('layouts.app')
@section('title',"Blog")
@section('content')
<h1>Editar</h1>
<form action="{{route('posts.update',$post)}}" method="post">
    @csrf @method('PATCH')
    @include('posts.form-fields')
    <button type="submit">Enviar</button>
</form>
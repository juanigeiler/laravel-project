@extends('layouts.app')
@section('title',"Blog")
@section('content')
    <h1>Create new post</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
    </form>

@endsection

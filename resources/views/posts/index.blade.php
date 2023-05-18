@extends('layouts.app')
@section('title',"Blog")
@section('content')
    @auth
        <a href="{{route('posts.create')}}">Create new post</a>
    @endauth
    <h1>Blog</h1>
    @foreach ($posts as $p)
       {{-- <h2>{{  $p->title }}</h2> --}}
        <div style="display:flex; align-items:baseline;">
            <h2>
                <a href="/blog/{{$p->id}}">{{  $p->title }}</a>
            </h2> &nbsp;
            @auth
            <a href="{{route('posts.edit', $p)}}">Edit</a>&nbsp;
            <form method="post" action="{{route('posts.destroy', $p)}}">
                @csrf @method('DELETE')
                <button>Delete</button>
            </form>
            @endauth
        </div>
    @endforeach
@endsection

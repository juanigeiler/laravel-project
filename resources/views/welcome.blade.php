@extends('layouts.app')   {{-- CON LAYOUTS --}}
@section('title',"Home")

@section('content')


{{-- @component('components.layout') --}}
{{-- @endcomponent --}}
<h1>
    Hello world!
  </h1>
  @auth
      <div class="text-black">{{Auth::user()->name}}</div>
  @endauth
@endsection

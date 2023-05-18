@extends('layouts.app')
@section('title',"Login")
@section('content')
<div class="container-fluid">
    <h1>Login</h1>
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-row mt-3">
            <div class="col-md-4">
                <label>Email</label>
                <input name="email" class="form-control" type="email" value="{{old('email')}}">
                @error('email')
                    <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-4">
                <label>Password</label>
                <input name="password" class="form-control" type="password" value="{{old('password')}}">
                @error('password')
                    <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-2 align-self-end">
                <label for="checkbox">Recuérdame</label>
                <input name="remember" id="checkbox" class="checkbox" type="checkbox" value="on">
                @error('remember')
                    <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-2 align-self-end">
                <button type="submit" class="form-control">Login</button>
            </div>
        </div>
    </form>
</div>
@endsection

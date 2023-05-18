@extends('layouts.app')
@section('title',"Register")
@section('content')
<div class="container-fluid">
    <h1>Register</h1>
    <a href="{{route('login')}}">Login</a>
    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="form-row mt-3">
            <div class="col-md-2">
                <label>Name</label>
                <input name="name" class="form-control" type="text" value="{{old('name')}}">
                @error('name')
                    <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-2">
                <label>Email</label>
                <input name="email" class="form-control" type="email" value="{{old('email')}}">
                @error('email')
                    <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-2">
                <label>Password</label>
                <input name="password" class="form-control" type="password" value="{{old('password')}}">
                @error('password')
                    <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-2">
                <label>Password Confirmation</label>
                <input name="password_confirmation" class="form-control" type="password" value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                    <br>
                    <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-2 align-self-end">
                <button type="submit" class="form-control">Enviar</button>
            </div>
        </div>
    </form>
</div>
@endsection

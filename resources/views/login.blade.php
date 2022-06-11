@extends('layout.notLoggedin')
@section('content')
    {{@csrf_field()}}
    Name: <input type="email" name="email" placeholder="email" value="{{old('email')}}"><br>
    @error('email')
        {{$message}}<br>
    @enderror
    Password: <input type="password" name="pass" value="{{old('pass')}}" placeholder="Id"><br>
    @error('pass')
        {{$message}}<br>
    @enderror
@endsection
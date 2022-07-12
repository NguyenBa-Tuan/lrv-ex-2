@extends('layouts.master')
@section('title','Thêm')
@section('content')

<h2>Chỉnh sửa user</h2>

<form action="/users/update/{{ $user->id }}" method="post">
    @csrf
    <label for="Name">
        Name:
        <input type="text" name="name" value="{{$user->name}}">
    </label><br><br>
    <label for="Email">
        Email:
        <input type="text" name="email" value="{{$user->email}}">
    </label><br><br>
    <label for="Password">
        Password:
        <input type="text" name="password">
    </label><br><br>
    <button type="submit">Chỉnh sửa user</button>
</form>

@endsection
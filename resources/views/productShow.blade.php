@extends('layouts.master')
@section('title', 'Trang product')

<!-- <h1 style="text-align: center;">Trang product</h1> -->
<!-- <h2 style="text-align: center;">số lượng bài viết {{-- $count --}}</h2> -->

@section ('content')
    @foreach ($data as $key => $value) 
        <p>{{$value->id}}</p>
        <p>{{$value->product_name}}</p>
        <p>{{$name[$key]}}</p>
    @endforeach
@endsection
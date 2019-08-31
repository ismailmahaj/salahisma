@extends('adminlte::page')
@section('content')
    <h3><b>Name</b></h3>
    {{$portfolio->name}}
    <h3><b>Tag</b></h3>
    {{$portfolio->tag}}
    <h3><b>Image</b></h3>
    <img src="{{asset("images/".$portfolio->image)}}" alt="">
@endsection

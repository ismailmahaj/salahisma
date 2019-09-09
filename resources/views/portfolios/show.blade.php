@extends('adminlte::page')
@section('content')
    <h3><b>Name</b></h3>
    {{$portfolio->name}}
    <h3><b>Tag</b></h3>
    {{$portfolio->tag}}
    <h3><b>Image</b></h3>
    <img style="width: 350px; height: 350px" src="{{asset("images/".$portfolio->image)}}" alt="">
@endsection

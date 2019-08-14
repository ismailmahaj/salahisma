@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>About</h1>
@stop

@section('content')
    @foreach($abouts as $about)
        <h1><a href="{{ route('about.edit',$about->id)}}">{{$about->title}}</a></h1>
        <p>{{$about->name}}</p>
        <p>{{$about->description}}</p>
        <p>{{$about->resume}}</p>
        <p>{{$about->localisation}}</p>
        <p>{{$about->experience}}</p>
        <p>{{$about->project}}</p>


    @endforeach
@stop

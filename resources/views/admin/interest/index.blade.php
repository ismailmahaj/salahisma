@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Interest</h1>
@stop

@section('content')
   @foreach($interests as $interest)
       <a href="{{ route('interest.edit',$interest->id)}}">
           {{$interest->name}}

       </a>
       <a href="{{ route('interest.edit',$interest->id)}}">
           {{$interest->classeIcone}}
       </a>


   @endforeach
@stop

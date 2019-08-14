@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>interest</h1>
@stop

@section('content')
    <p>Page create</p>
<form action="{{route('interest.store')}}" method="POST">
    @csrf

    <div class="form-group">
        <label>Name</label>
        <input name="name" type="text" class="form-control" placeholder="Enter ...">
    </div>
    <div class="form-group">
        <label>classe icon</label>
        <input name="classeIcone" type="text" class="form-control" placeholder="Enter ...">
    </div>


    <button type="submit" class="btn btn-block btn-primary btn-lg"> Envoyé</button>
    </form>
@stop

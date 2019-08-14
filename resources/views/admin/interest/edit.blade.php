@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>About</h1>
@stop

@section('content')
    <p>Page edit</p>
    <form action="{{route('interest.update', $interest->id)}}" method="POST">
        @method("PATCH")

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder=" ..." value="{{$interest->name}}">
        </div>
        <div class="form-group">
            <label>classe icone</label>
            <input name="classeIcone" type="text" class="form-control" placeholder=" ..." value="{{$interest->classeIcone}}">
        </div>

        <button type="submit" class="btn btn-block btn-primary btn-lg"> Envoyé</button>
    </form>
    <form action="{{ route('interest.destroy', $interest->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-block btn-lg" type="submit">Delete</button>
    </form>
@stop

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>About</h1>
@stop

@section('content')
    <p>Page create</p>
<form action="{{route('about.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label>Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter ...">
    </div>
    <div class="form-group">
        <label>Name</label>
        <input name="name" type="text" class="form-control" placeholder="Enter ...">
    </div>
    <div class="form-group">
        <label>localisation</label>
        <input name="localisation" type="text" class="form-control" placeholder="Enter ...">
    </div>
    <div class="form-group">
        <label>description</label>
        <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </div>
    <div class="form-group">
        <label>resume</label>
        <textarea name="resume" class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </div>
    <div class="form-group">
        <label>Experience</label>
        <input name="experience" type="text" class="form-control" placeholder="Enter ...">
    </div>
    <div class="form-group">
        <label>Project</label>
        <input name="project" type="text" class="form-control" placeholder="Enter ...">
    </div>
    <button type="submit" class="btn btn-block btn-primary btn-lg"> Envoyé</button>
    </form>
@stop

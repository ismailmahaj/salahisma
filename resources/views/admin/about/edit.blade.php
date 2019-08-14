@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>About</h1>
@stop

@section('content')
    <p>Page edit</p>
    <form action="{{route('about.update', $about->id)}}" method="POST">
        @method("PATCH")

        @csrf
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" placeholder="" value="{{$about->title}}">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder=" ..." value="{{$about->name}}">
        </div>
        <div class="form-group">
            <label>localisation</label>
            <input name="localisation" type="text" class="form-control" placeholder="Enter ..." value="{{$about->localisation}}">
        </div>
        <div class="form-group">
            <label>description</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."> {{$about->description}}"</textarea>
        </div>
        <div class="form-group">
            <label>resume</label>
            <textarea name="resume" class="form-control" rows="3" placeholder="Enter ..."> {{$about->resume}}"</textarea>
        </div>
        <div class="form-group">
            <label>Experience</label>
            <input name="experience" type="text" class="form-control" placeholder="Enter ..."  value="{{$about->experience}}">
        </div>
        <div class="form-group">
            <label>Project</label>
            <input name="project" type="text" class="form-control" placeholder="Enter ..."  value="{{$about->project}}">
        </div>
        <button type="submit" class="btn btn-block btn-primary btn-lg"> Envoyé</button>
    </form>
    <form action="{{ route('about.destroy', $about->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-block btn-lg" type="submit">Delete</button>
    </form>
@stop

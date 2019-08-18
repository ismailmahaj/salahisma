@extends('adminlte::page')
@section('header')
@endsection
@section('content')
    <style>
        a{
            color: inherit;
        }

    </style>

    <div class="container">
        <div class="box box-danger box-body">
            <div class="d-flex justify-content-end mr-3">
                <button class="btn btn-success"><a href="backgroundImage/{{$background->id}}/edit">Edit</a></button>
            </div>
            <div class="text-center">
                    <h1 class="text-dark">Background</h1>
                    <h3 class="text-dark mt-5">Image</h3>
                    <img src="{{asset("images/".$background->image)}}" alt="">
                    <h3 class="text-dark">Nom de l'agence</h3>

                    <h5 class="text-dark">{{$background->agencyName}}</h5>
                    <h3 class="text-dark">Section we are</h3>
                @foreach($weAre as $we)
                    <h5 class="text-dark">- <span>{{$we}}</span></h5>
                @endforeach
            </div>
        </div>
    </div>
@stop

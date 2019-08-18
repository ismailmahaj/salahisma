@extends("adminlte::page")
@section('content')

    <div class="container">
        <div class="box box-danger box-body">
            <h3>Title</h3>
            <p>{{$blog->title}}
            <h3>Categorie</h3>
            <p>{{$blog->cat}}</p>
            <h3>Content</h3>
            <p>{!! $blog->contenu !!}</p>
            <h3>Image</h3>
            <img src="{{asset('images/'.$blog->image)}}" alt="">

        </div>
    </div>

@endsection

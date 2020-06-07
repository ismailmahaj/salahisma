@extends('adminlte::page')
@section('content')
    <div class="container">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th  scope="col">Title</th>
                <th scope="col">Categorie</th>
                <th scope="col">Action</th>
                <th scope="col">
                    <a  class="" href="blogs/create"><button class="btn btn-primary">+</button></a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->cat}}</td>
                    <td>
                        <div style="display: flex" class="d-flex">
                            <div>
                                <a href="/blogs/{{$blog->id}}/edit"><button class="btn btn-warning">Edit</button></a>
                            </div>
                            <div>
                                <a href="/blogs/{{$blog->id}}"><button class="btn btn-success">Show</button></a>
                            </div>
                            <div>
                                <form method="post" action="blogs/{{$blog->id}}">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

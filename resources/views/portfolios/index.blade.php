@extends('adminlte::page')
@section('content')
    <div class="container">
        <table class="table table-light">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th  scope="col">name</th>
                <th scope="col">tag</th>
                <th scope="col">Action</th>
                <th scope="col">
                    <a  class="" href="portfolios/create"><button class="btn btn-primary">+</button></a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($portfolios as $portfolio)
                <tr>
                    <td>{{$portfolio->id}}</td>
                    <td>{{$portfolio->name}}</td>
                    <td>{{$portfolio->tag}}</td>

                    <td>
                        <div style="display: flex" class="d-flex">

                            <div>
                                <a href="/portfolios/{{$portfolio->id}}"><button class="btn btn-success">Show</button></a>
                            </div>
                            <div>
                                <a href="/portfolios/{{$portfolio->id}}/edit" class="btn btn-warning">Edit</a>
                            </div>
                            <div>
                                <form method="post" action="portfolios/{{$portfolio->id}}">
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

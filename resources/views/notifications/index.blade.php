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
            </tr>
            </thead>
            <tbody>
                @foreach($notifications as $notification)
                    <tr>
                        <td>{{$notification->name}}</td>
                        <td></td>
                        <td></td>
                        <td>
                            <div style="display: flex" class="d-flex">

                                <div>
                                    <a href="/notifications/"><button class="btn btn-success">Show</button></a>
                                </div>
                                <div>
                                    <form method="post" action="notifications/{{$notification->id}}">
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

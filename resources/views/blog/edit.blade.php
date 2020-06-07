@extends("adminlte::page")
@section('content')
    <div class="container">
        <div width="50%" class="row  d-flex justify-content-center ">

            <div class=" box box-body box-danger d-flex flex-column justify-content-center">
                <form method="post" action="/blogs/{{$blog->id}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <h3>Title</h3>
                    <input name="title" type="text">
                    <h3>Content</h3>
                    <textarea name="contenu" id="" cols="30" rows="10"></textarea>
                    <h3>Categorie</h3>
                    <input name="cat" type="text">
                    <h3>Image</h3>
                    <input class="mb-4" name="image" type="file">
                    <button class="btn btn-success ">Submit</button>
                </form>
            </div>

        </div>
    </div>
@endsection

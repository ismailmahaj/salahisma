@extends("adminlte::page")
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" method="post" action="/portfolios">
            @csrf
            <h3><b>Choose an image for the project</b></h3>
            <input type="file" name="image">
            <h3><b>Name</b></h3>
            <input type="text" name="name">
            <h3><b>Link</b></h3>
            <input type="text" placeholder="Paste the link from the project" name="link">
            <h3><b>Tag</b></h3>
            <input type="text" name="tag">
            <div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
@endsection

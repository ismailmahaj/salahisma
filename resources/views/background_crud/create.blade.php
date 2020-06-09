@extends("adminlte::page")
@section('content')
<div class="container">
    <div width="50%" class="row  d-flex justify-content-center ">
        <div class=" box box-body box-danger d-flex flex-column justify-content-center">
            <form method="post" action="backGroundImage" enctype="multipart/form-data">
                @csrf
                <h3>Agency Name</h3>
                <input name="agencyName" type="text">
                <h3>Image</h3>
                <input class="mb-4" name="image" type="file">
                <button class="btn btn-success ">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
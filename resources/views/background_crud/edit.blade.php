@extends("home")
@section('content')

    <form method="Post" action="/backgroundImage/{{$background->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')


        <div class="form-group">

            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div>
            <input placeholder="nom de l'agence" name="agencyName" type="text">
        </div>

        <div class="mt-3">
            <button name="submit" class="btn btn-success">Upload</button>
        </div>

    </form>
@endsection

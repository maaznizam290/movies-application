@extends('movies.layout')
@section('content')
<div class="wrapperdiv">
    <div class="formcontainer">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Movie</h2>
                </div>
            </div>
        </div>
        <form action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                 <label for="title" class="col-sm-2 col-form-control">Title</label>
                 <div class="col-sm-10"> 
                    <input type="text" name="title" id="title" class="form-control">
                 </div>
                </div>
                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-control">Genre</label>
                    <div class="col-sm-10"> 
                        <select name="genre" id="genre" class="form-control">
                            <option value="">Select Genre</option>
                            @if ($genres)
                            @foreach ( $genres as $genre)
                            <option value="{{$genre}}">{{$genre}}</option>
                            @endforeach    
                            @endif
                        </select>
                    </div>
                   </div>
                   <div class="form-group row">
                    <label for="release_year" class="col-sm-2 col-form-control">Release Year</label>
                    <div class="col-sm-10"> 
                       <input type="text" name="release_year" id="release_year" class="form-control">
                    </div>
            </div>
            <div class="form-group row">
                <label for="poster" class="col-sm-2 col-form-control">Poster</label>
                <div class="col-sm-10"> 
                   <input type="file" name="poster" id="poster" class="form-control-file">
                </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2 col">
                
            </div>
            <div class="col-sm-10"> 
                <button name="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
    </div>
        </div>
    </div>
</form>
</div>
@endsection
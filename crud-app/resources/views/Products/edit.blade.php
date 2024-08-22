@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Movie Page</div>
  <div class="card-body">
      
      <form action="{{ url('movies/' .$Movies->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Movies->id}}" id="id" />
        <label>Movie Name</label></br>
        <input type="text" name="movie_name" id="movie_name" value="{{$Movies->movie_name}}" class="form-control"></br>
        <label>Movie Description</label></br>
        <input type="text" name="movie_description" id="movie_description" value="{{$Movies->movie_description}}" class="form-control"></br>
        <label>Movie Generation</label></br>
        <input type="text" name="movie_gener" id="movie_gener" value="{{$Movies->movie_gener}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
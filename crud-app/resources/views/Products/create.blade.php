@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Movies Page</div>
  <div class="card-body">
      
      <form action="{{ url('movies') }}" method="post">
        {!! csrf_field() !!}
        <label>Movie Name:</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Movie Description:</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Movie Generation:</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
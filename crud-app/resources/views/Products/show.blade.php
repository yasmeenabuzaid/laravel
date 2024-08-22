@extends('Products.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"> Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $products->name }}</h5>
        <p class="card-text">Address : {{ $products->address }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
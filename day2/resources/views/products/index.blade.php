@extends('layout.app');
@section('content')
<a href="{{ route('products.create') }}">Add New Product</a>
@foreach ($products as $product)
<div class="card" style="width: 18rem;">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
      <h5 class="card-title">{{$product->product_name}}</h5>
      <p class="card-text">{{$product->product_description}}</p>
      <p class="card-text">{{$product->product_price}}</p>
      <li>
        {{ $product->product_name }} - {{ $product->product_price }}
        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    </div>
  </div>
  <br>
  
  <br>
  @endforeach
  @endsection
   
    


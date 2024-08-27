@extends('layout.app')
@section('content')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">products</h2>
            <a href="{{ route('products.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus" ></i>add new product</button></a>
        </div>
    </div>
</div>
<div>
       <br>
    <div class="row">
        <div class="col-lg-9">
            <div class="table-responsive table--no-card m-b-40">
                @if($products->isNotEmpty())
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Img</th>
                            <th scope="col">Category</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <th></th>
                                <th>{{$product->category_id}}</th>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_description }}</td>
                                <td>${{ number_format($product->product_price, 2) }}</td>
                               <td>{{date('y/m/d' , strtotime($product->created_at))}}</td>

                                        <td>
                                    <a href="{{ route('products.edit', $product->id) }}">
                                        <button type="button" class="btn btn-secondary">Edit</button>
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p>No products found.</p>
                @endif
                
                </div>
            </div> 
        </div>
        @endsection     
<div>
</div>
</div>   
</div>
</div>
</div>

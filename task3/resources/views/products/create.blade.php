@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="w-100" style="max-width: 500px;">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <input type="text" name="product_name" placeholder="Enter name" required>
                <input type="text" name="product_description" placeholder="Enter description" required>
                <input type="number" name="product_price" placeholder="Enter price" required>
                <br>
                <button type="submit">Add Product</button>
            </form>
        </div>
    </div>
@endsection

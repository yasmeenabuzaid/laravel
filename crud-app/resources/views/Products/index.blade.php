@extends('Products.layout')

@section('content')
<div class="card">
    <div class="card-header">Product List</div>
    <div class="card-body">
        <a href="{{ url('/Products/create') }}" class="btn btn-success mb-3">Add New Product</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->address }}</td>
                    <td>
                        <a href="{{ url('/Products/' . $product->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ url('/Products/' . $product->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                        <form method="POST" action="{{ url('/Products/' . $product->id) }}" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

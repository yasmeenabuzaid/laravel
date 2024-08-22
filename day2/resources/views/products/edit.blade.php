<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>edit</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="product_name" value="{{$product->product_name}}">
        <input type="text" name="product_description" value="{{$product->product_description}}">
        <input type="number" name="product_price" value="{{$product->product_price}}">
        <br>
        <button type="submit">update</button>
    </form>
</body>
</html>

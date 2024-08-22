<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="product_name" placeholder="Enter name" required>
        <input type="text" name="product_description" placeholder="Enter description" required>
        <input type="number" name="product_price" placeholder="Enter price" required>
        <br>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>

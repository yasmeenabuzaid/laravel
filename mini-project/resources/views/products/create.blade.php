<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 400px;
            background-color: #fff;
            border: 2px solid transparent;
            padding: 32px 24px;
            font-size: 14px;
            color: #000;
            display: flex;
            flex-direction: column;
            gap: 20px;
            box-sizing: border-box;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container button:active {
            transform: scale(0.95);
        }

        .form-container .form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-container .form-group {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .form-container .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #000000;
            font-weight: 600;
            font-size: 12px;
        }

        .form-container .form-group input,
        .form-container .form-group textarea {
            padding: 12px 16px;
            border-radius: 8px;
            color: #747474;
            background-color: transparent;
            border: 1px solid #414141;
            font-family: inherit;
        }

        .form-container .form-group textarea {
            resize: none;
            height: 96px;
        }

        .form-container .form-group input::placeholder,
        .form-container .form-group textarea::placeholder {
            opacity: 0.5;
        }

        .form-container .form-group input:focus,
        .form-container .form-group textarea:focus {
            outline: none;
            border-color: #e81cff;
        }

        .form-container .form-submit-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: inherit;
            color: #fffcfc;
            font-weight: 600;
            width: 100%;
            background: #313131;
            border: 1px solid #414141;
            padding: 12px 16px;
            font-size: 14px;
            gap: 8px;
            margin-top: 8px;
            cursor: pointer;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .form-container .form-submit-btn:hover {
            background-color: #4e4d4d;
        }
    </style>
</head>
<body>
<div class="form-container">
    <form class="form" action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" id="product_name" name="product_name" placeholder="Product Name" required>
        </div>
        <div class="form-group">
            <label for="product_description">Product Description</label>
            <textarea name="product_description" id="product_description" placeholder="Description" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select id="category_id" name="category_id" required>
                <!-- Populate categories from the database -->
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        
        
        <button class="form-submit-btn" type="submit">Add New Product</button>
    </form>
</div>
</body>
</html>

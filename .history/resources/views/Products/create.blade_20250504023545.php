<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Product</title>
</head>
<body>
<h1>Create New Product</h1>

<form action="{{route('products.store')}}" method="POST">
    @csrf
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="price">Price: </label>
    <input type="number" name="price" id="price" step="0.01" required>
    <br>
    <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>{{$category->id ."-". $category->name }}</option>
                @endforeach
            </select>
                <br>
    <label for="description">Description : </label>
    <input type="text" name="description" id="description" required>
    <br>
    <label for="image">Product Image : </label>
    <input type="file" name="image" id=
    >
    <br>
    <button type="submit">Create Product</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>

<body>
    <h1>Update Product {{ $product->id }}</h1>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
        <br>
        <label for="price">Price: </label>
        <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $product->price) }}"
            required>
        <br>
        <label for="category">Category: </label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == old('category_id', $product->category->id) ? 'selected' : '' }}>
                    {{ $category->id . '-' . $category->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="description">Description : </label>
        <textarea type="text" name="description" id="description" required>{{ old('description', $product->description) }}</textarea>
        <br>
        <label for="user_id">User Id: </label>
        <select type="number" name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $user->id == old('user_id', $product->user_id) ? 'selected' : '' }}>
                    {{ $user->id . '-' . $user->name }}</option>
            @endforeach
        </select>

        <br>
        {{-- <input type="file" name="image" id="image" accept="image/*"> --}}
        <br>
        <label for="image">Product Image : </label>
        @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" width="400">
            <br>
        @endif
        <input type="file" name="image" id="image" accept="image/*">
        <br>
        <button type="submit">Update Product</button>
    </form>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
<h1>Update Product {{$product->id}}</h1>
<form action="{{route('products.update',$product)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" value="{{$product->name}}" required>
    <br>
    <label for="price">Price: </label>
    <input type="number" name="price" id="price" step="0.01" value="{{$product->price}}" required>
    <br>
    <label for="category">Category: </label>
       <select name="category_id" id="category_id">
        @foreach ($categories as $category)
        <option value="{{$category->id}}" {{$product->category_id==$product->category->id?"selected":""}}>{{$category_id."-".$category->name}}</option>

        @endforeach
       </select>
       <br>
    <label for="description">Description : </label>
    <textarea type="text" name="description" id="description" required>{{$product->description}}</textarea>
    <br>
    <button type="submit">Update Product</button>
</form>
</body>
</html>

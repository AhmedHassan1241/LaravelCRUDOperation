<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Product</title>
</head>
<body>
    <h1>Products {{$product->id}}</h1>
    <div style="border: 1px solid black;padding-left: 10px;margin: 10px 0">
    <h1>Name: {{$product->name}}</h1>
    <p>Price : {{$product->price}}</p>
    <p>Category : {{ $product->category_id."-". $product->category->name}}</p>
    <p>Description : {{$product->description}}</p>
    
    <p>Image : <img src="{{asset('storage/'.$product->image)}}" alt="" width="300"></p>
</div>
<a href="{{route('products.index')}}">Back To Products</a>

</body>
</html>

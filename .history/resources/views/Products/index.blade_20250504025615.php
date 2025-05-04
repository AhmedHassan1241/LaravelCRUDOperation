<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products </title>
</head>

<body>
    <h1>All Products</h1>
    {{-- <form action="{{ route('products.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
        <button type="submit">Sreach</button>
        <button type="reset" onclick="window.location.href='{{ route('products.index') }}'">Reset</button>

    </form> --}}
    <form action="{{ route('products.index') }}" method="GET">
        <input type="text" name="search" id="search" placeholder="Search Name..." value="{{ request('search') }}">
        <input type="number" name="price" id="price" placeholder="Search Price..." step="0.01" value="{{ request('price') }}">
        <input type="text" name="category" id="category" placeholder="Search Category..." value="{{request('category')}}">
        <button type="submit">Search</button>
        <button type="reset" onclick="window.location.href='{{ route('products.index') }}'">Reset</button>
    </form>
    <hr>
    <hr>
    <a href="{{ route('products.create') }}">Create New Product</a>
    @if (count($products) > 0 )
        @foreach ($products as $product)
            <div style="border: 1px solid black;padding-left: 10px;margin: 10px 0">
                <h1>Name: {{ $product->name }}</h1>
                <p>Price : {{ $product->price }}</p>
                {{-- <p>Category : @foreach ($categories as $category)
                        @if ($category->id === $product->category_id)
                            {{ $category->name }}
                        @endif
                    @endforeach
                </p> --}}
                <p>Category : {{$product->category->name}}</p>
                <p>Description : {{ $product->description }}</p>
                @if($product->image)
                <img src="{{ asset('../public/storage/products') }}" width="100">
            @endif
                <a href="{{ route('products.edit', $product) }}">Edit</a>
                <a href="{{ route('products.show', $product) }}">Show</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick="return confirm('Are You Sure To Delete {{ $product->name }}')">Delete</button>
                </form>
            </div>
        @endforeach
        <hr>
        <hr>
    @else
        <p>Nothing To Show</p>
    @endif
    <script>
        function resetSearch() {
            window.location.href = "{{ route('products.index') }}";
        }
    </script>
</body>

</html>

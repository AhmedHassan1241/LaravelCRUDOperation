<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Category</title>
</head>

<body>
    <h1>Update Category : {{ $category->id }}</h1>

    <form style="margin: 15px 0" action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name: </label>
        <textarea name="name" id="name" required>{{ $category->name }}</textarea>

        <br>
        <button type="submit">Update Category</button>
    </form>
    <a href="{{ route('categories.index') }}">Back To Categories</a>
</body>

</html>

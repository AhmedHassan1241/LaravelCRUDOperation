<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Category</title>
</head>
<body>
    <h1>Create New Category</h1>

    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Create</button>
    </form>
<a href="{{route('categories.index')}}">Back To Categories</a>
</body>
</html>

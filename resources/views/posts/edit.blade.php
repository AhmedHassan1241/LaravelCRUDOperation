<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Post</title>
</head>

<body>
    <h1>Update Post {{ $post->id }}</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title: </label>
        <input type="text" name="title" id="title" required value="{{ $post->title }}">
        <br>
        <label for="content">Content: </label>
        <textarea type="text" name="content" id="content" required>{{$post->content}}</textarea>
        <br>
        <label for="category">Category: </label>
        <input type="text" name="category" id="category" required value="{{ $post->category_id }}">
        <br>
        <button type="submit">Update Post</button>
    </form>
    <a href="{{route('posts.index')}}">Back To Posts</a>
</body>

</html>

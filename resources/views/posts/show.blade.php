<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Post</title>
</head>
<body>
    <h1>Show Post {{$post->id}}</h1>
    <div style="border: 1px solid black;text-align: center">
        <p><b>Title :</b> {{$post->title}}</p>
        <p><b>Content :</b> {{$post->content}}</p>
        <label for="category">Category: {{$post->category}} </label>
        <br>
    </div>
    <a href="{{route('posts.index')}}">Back To Posts</a>
</body>
</html>

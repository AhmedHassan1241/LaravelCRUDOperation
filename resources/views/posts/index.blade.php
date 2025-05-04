<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
</head>
<body>
<h1 style="text-align: center">All Posts</h1>
<div style="text-align: center; margin-bottom: 10px;">
    <a href="{{route('posts.create')}}">Create New Post </a>
</div>
@foreach ($posts as $post)
<div style="border: 1px solid black;text-align: center">
    <h2>ID: {{$post->id}}</h2>
    <h3>Title : {{$post->title}}</h3>
    <p>Content : {{$post->content}}</p>
    <p>Category : {{$post->category}}</p>
    <a href="{{route('posts.show',$post)}}">Show</a>
    <a href="{{route('posts.edit',$post)}}">Edit</a>
    <form action="{{route('posts.destroy',$post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are Your Sure To Delete Post {{$post->id}} ?')">Delete</button>
    </form>
</div>
@endforeach
</body>
</html>

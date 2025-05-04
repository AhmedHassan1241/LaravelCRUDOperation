<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Post</title>
</head>

<body>
    <h1>Create New Post :</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div style="margin: 20px 20px">
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" required>
            <br>
            <label for="content">Content: </label>
            <input type="text" name="content" id="content" required>
            <br>
            
            <button type="submit">Create</button>
        </div>
    </form>
    <a href="{{ route('posts.index') }}">Back To Posts</a>
</body>

</html>

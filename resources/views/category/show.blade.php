<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Category</title>
</head>
<body>
    <h1 style="text-align: center">Show Category {{$category->id}}</h1>
    <div style="justify-items: center ;margin: 15px 0;">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                </tr>

        </table>
        <div style="margin: 15px 0">

            <a href="{{route('categories.index')}}">Back To Category</a>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Category</title>
</head>

<body>
    <h1 style="text-align: center">All categories</h1>
    <div style="text-align: center">
        <a href="{{ route('categories.create') }}">Create New Category</a>
    </div>
    @if (count($categories) > 0)
        <div style="justify-items: center ;margin: 15px 0;">
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th colspan="3">Operation</th>
                </tr>

                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td><a href="{{ route('categories.edit', $category) }}">Edit</a></td>
                        <td><a href="{{ route('categories.show', $category) }}">Show</a></td>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td><button type="submit"
                                    onclick="return confirm('Are You Sure To Delete {{ $category->id }}')">Delete</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        <h4 style="text-align: center;color:rgb(116, 131, 132)">No Categories To Show</h4>
    @endif
</body>

</html>

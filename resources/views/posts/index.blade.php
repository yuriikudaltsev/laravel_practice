<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts/index</title>
</head>
<body>
    
    <h1>Список постів:</h1>

    <ul>
        <li>
            <a href="{{ route('posts.show', ['slug' => 1]) }}">1</a>
            <a href="{{ route('posts.edit', ['slug' => 1]) }}">Edit</a>
            <form action="{{ route('posts.destroy', ['slug' => 1]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['slug' => 2]) }}">2</a>
            <a href="{{ route('posts.edit', ['slug' => 2]) }}">Edit</a>
            <form action="{{ route('posts.destroy', ['slug' => 2]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['slug' => 3]) }}">3</a>
            <a href="{{ route('posts.edit', ['slug' => 3]) }}">Edit</a>
            <form action="{{ route('posts.destroy', ['slug' => 3]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    </ul>


</body>
</html>

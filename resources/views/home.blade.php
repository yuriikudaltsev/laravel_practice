<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Hello, world!</title>
</head>
<body>
    <h1>Hello, world!</h1>

    {{ $res; }} <br>
    {{ $name; }}<br>

    {{ route('post', ['id' => 4, 'slug' => 'test2']) }}<br>
    {{ route('admin.post', ['id' => 43]) }}
</body>
</html>
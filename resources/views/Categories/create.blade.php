<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a category</title>
</head>
<body>
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        Name: <input type="text" name="name"><br>
        <button>Add</button>
    </form>
</body>
</html>

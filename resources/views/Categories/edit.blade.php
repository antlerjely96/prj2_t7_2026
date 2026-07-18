<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit a category</title>
</head>
<body>
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $category->name }}"><br>
        <button>Edit</button>
    </form>
</body>
</html>

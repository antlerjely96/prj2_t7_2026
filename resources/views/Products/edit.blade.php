<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit a product</title>
</head>
<body>
    <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $product->name }}"><br>
        Price: <input type="text" name="price" value="{{ $product->price }}"><br>
        Quantity: <input type="text" name="quantity" value="{{ $product->quantity }}"><br>
        Category: <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    @if($product->category_id == $category->id)
                        {{ 'selected' }}
                    @endif
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select><br>
        <button>Edit</button>
    </form>
</body>
</html>

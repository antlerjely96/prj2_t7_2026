@extends('Layouts.layout')
@section('main_yield')
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        Name: <input type="text" name="name"><br>
        Price: <input type="text" name="price"><br>
        Quantity: <input type="text" name="quantity"><br>
        Category: <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select><br>
        <button>Add</button>
    </form>
@endsection

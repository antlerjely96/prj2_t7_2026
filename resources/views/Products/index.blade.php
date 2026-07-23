@extends('Layouts.layout')
@section('main_yield')
    <a href="{{ route('products.create') }}">Add a product</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>
                    {{ $product->id }}
                </td>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->price }}
                </td>
                <td>
                    {{ $product->quantity }}
                </td>
                <td>
                    {{ $product->category->name }}
                </td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

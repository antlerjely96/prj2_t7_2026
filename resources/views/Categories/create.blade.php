@extends('Layouts.layout')
@section('main_yield')
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        Name: <input type="text" name="name"><br>
        <button>Add</button>
    </form>
@endsection

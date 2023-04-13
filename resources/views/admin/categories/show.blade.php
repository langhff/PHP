@extends('master')

@section('title', 'Orders')
@section('content')
    <div class="container">
        <h3 class="cart-header">Category "{{ $category->name }}"</h3>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <th scope="row">Code</th>
                    <td>{{ $category->code }}</td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Total Products</th>
                    <td>{{ $category->products->count() }}</td>
                </tr>
            </tbody>
        </table>
        <form method="POST" action="{{ route('categories.destroy', $category) }}">
            @csrf
            @method('DELETE')
            <a href="{{ route('categories.index') }}">
                <button type="button" class="button-blue">Return</button>
            </a>
            <a href="{{ route('categories.edit', $category->id) }}">
                <button type="button" class="button-blue">Edit</button>
            </a>
            <a href="{{ route('categories.destroy', $category->id) }}">
                <button type="submit" class="button-blue">Delete</button>
            </a>
        </form>
    </div>
@endsection

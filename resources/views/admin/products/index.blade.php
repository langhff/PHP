@extends('master')
@section('title', 'Products')
@section('content')
    @include('layouts/admin')
    <div class="container">
        <h3 class="cart-header">Products</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Code</th>
                <th scope="col">Category</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img height="100px" src="{{ Storage::url($product->image) }}" alt=""></td>
                    <td>
                        <form method="POST" action="{{ route('products.destroy', $product) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('products.show', $product) }}">
                            <button type="button" class="button-blue">Show</button>
                        </a>
                        <a href="{{ route('products.edit', $product) }}">
                            <button type="button" class="button-blue">Edit</button>
                        </a>
                        <a href="{{ route('products.destroy', $product->id) }}">
                            <button type="submit" class="button-blue">Delete</button>
                        </a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('products.create') }}">
            <button class="button-blue">Add Product</button>
        </a>
    </div>
@endsection

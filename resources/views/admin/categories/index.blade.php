@extends('master')
@section('title', 'Categories')
@section('content')
    @include('layouts/admin')
    <div class="container">
        <h3 class="cart-header">Categories</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form method="POST" action="{{ route('categories.destroy', $category) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('categories.show', $category) }}">
                            <button type="button" class="button-blue">Show</button>
                        </a>
                        <a href="{{ route('categories.edit', $category) }}">
                            <button type="button" class="button-blue">Edit</button>
                        </a>
                        <a href="{{ route('categories.destroy', $category->id) }}">
                            <button type="submit" class="button-blue">Delete</button>
                        </a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('categories.create') }}">
            <button class="button-blue">Add Category</button>
        </a>
    </div>
@endsection

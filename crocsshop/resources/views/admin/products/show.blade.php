@extends('master')

@section('title', 'Product ' . $product->name)
@section('content')
    <div class="container">
        <h3 class="cart-header">Product "{{ $product->name }}"</h3>

        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Code:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="code" value="{{ $product->code }}">
            </div>
            <label for="category_id" class="col-sm-2 col-form-label">Category:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="category_id" value="{{ $product->category->name }}">
            </div>
            <label for="name" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="name" value="{{ $product->name }}">
            </div>
            <label for="price" class="col-sm-2 col-form-label">Price:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="price" value="{{ $product->price }}">
            </div>
            <label for="description" class="col-sm-2 col-form-label">Description:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="description" value="{{ $product->description }}">
            </div>
            <label class="col-sm-2 col-form-label" for="new">New</label>
            <div class="col-sm-10 mb-5">
                <input disabled class="form-check-input" type="checkbox" @if($product->isNew()) checked @endif id="new" name="new">
            </div>
            @if($product->isSale())
            <label class="col-sm-2 col-form-label" for="sale">Sale</label>
            <div class="col-sm-10 mb-5">
                <input disabled class="form-check-input" type="checkbox" @if($product->isSale()) checked @endif id="sale" name="sale">
            </div>
                <label for="old_price" class="col-sm-2 col-form-label old_price">Old Price:</label>
                <div class="col-sm-10 mb-5 old_price">
                    <input type="text" class="form-control-plaintext" name="old_price" value="{{ $product->old_price }}">
                </div>
            @endif
            <label for="image" class="col-sm-2 col-form-label">Image:</label>
            <div class="col-sm-10 mb-5">
                <img height="300px" src="{{ Storage::url($product->image) }}" alt="">
            </div>
        </div>

        <form method="POST" action="{{ route('categories.destroy', $product) }}">
            @csrf
            @method('DELETE')
            <a href="{{ route('products.index') }}">
                <button type="button" class="button-blue">Return</button>
            </a>
            <a href="{{ route('products.edit', $product->id) }}">
                <button type="button" class="button-blue">Edit</button>
            </a>
            <a href="{{ route('products.destroy', $product->id) }}">
                <button type="submit" class="button-blue">Delete</button>
            </a>
        </form>
    </div>
@endsection

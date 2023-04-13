@extends('master')
@isset($product)
    @section('title', 'Edit Product ' . $product->name)
@else
    @section('title', 'Create Product')
@endisset


@section('content')
    <div class="container">
        @isset($product)
            <h3 class="cart-header">Edit Product "{{ $product->name }}"</h3>
        @else
            <h3 class="cart-header">Create New Product</h3>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
                    action="{{ route('products.update', $product) }}"
              @else
                    action="{{ route('products.store') }}"
              @endisset
        >
        @csrf
        @isset($product)
            @method('PUT')
        @endisset

            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">Code:</label>
                <div class="col-sm-10 mb-5">
                    <input type="text" class="form-control" name="code" value="{{ old('code', isset($product) ? $product->code :  null) }}">
                    @error('code')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <label for="category_id" class="col-sm-2 col-form-label">Category:</label>
                <div class="col-sm-10 mb-5">
                    <select class="form-control" name="category_id" >
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if (old('category_id') == '')
                                        @isset($product)
                                            @if($product->category_id == $category->id)
                                                selected
                                            @endif
                                        @endisset
                                    @else
                                        @if (old('category_id') == $category->id)
                                            selected
                                        @endif
                                    @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10 mb-5">
                    <input type="text" class="form-control" name="name" value="{{ old('name', isset($product) ? $product->name :  null) }}">
                    @error('name')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <label for="price" class="col-sm-2 col-form-label">Price:</label>
                <div class="col-sm-10 mb-5">
                    <input type="text" class="form-control" name="price" value="{{ old('price', isset($product) ? $product->price :  null) }}">
                    @error('price')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <label for="description" class="col-sm-2 col-form-label">Description:</label>
                <div class="col-sm-10 mb-5">
                    <input type="text" class="form-control" name="description" value="{{ old('description', isset($product) ? $product->description :  null) }}">
                </div>
                <label class="col-sm-2 col-form-label" for="new">New</label>
                <div class="col-sm-10 mb-5">
                    <input class="form-check-input" type="checkbox" @if(isset($product) && $product->isNew()) checked @endif id="new" name="new">
                </div>
                <label class="col-sm-2 col-form-label" for="sale">Sale</label>
                <div class="col-sm-10 mb-5">
                    <input onclick="old_price_changed()" class="form-check-input" type="checkbox" @if(isset($product) && $product->isSale()) checked @endif id="sale" name="sale">
                </div>
                <label for="old_price" class="col-sm-2 col-form-label old_price @if(isset($product) && !$product->isSale()) hidden @endif">Old Price:</label>
                <div class="col-sm-10 mb-5 old_price @if(isset($product) && !$product->isSale()) hidden @endif">
                    <input type="text" class="form-control" name="old_price" value="{{ old('old_price', isset($product) ? $product->old_price :  null) }}">
                    @error('old_price')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <label for="image" class="col-sm-2 col-form-label">Image:</label>
                <div class="col-sm-10 mb-5">
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                @isset($product)
                <label for="image" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10 mb-5">
                    <img height="300px" src="{{ Storage::url($product->image) }}" alt="">
                </div>
                @endisset
            </div>
            <button class="button-blue" type="submit">
                @isset($product)
                    Save Data
                @else
                    Create Product
                @endisset
            </button>
            <a href="{{ route('products.index')  }}">
                <button type="button" class="button-blue">Cancel</button>
            </a>
        </form>
    </div>
@endsection

@extends('master')
@isset($category)
    @section('title', 'Edit Category ' . $category->name)
@else
    @section('title', 'Create Category')
@endisset


@section('content')
    <div class="container">
        @isset($category)
            <h3 class="cart-header">Edit Category "{{ $category->name }}"</h3>
        @else
            <h3 class="cart-header">Create New Category</h3>
        @endisset
        <form method="POST"
              @isset($category)
                    action="{{ route('categories.update', $category) }}"
              @else
                    action="{{ route('categories.store') }}"
              @endisset
        >
        @csrf
        @isset($category)
            @method('PUT')
        @endisset
            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">Code:</label>
                <div class="col-sm-10 mb-5">
                    <input type="text" class="form-control" name="code" value="{{ old('code', isset($category) ? $category->code :  null) }}">
                    @error('code')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10 mb-5">
                    <input type="text" class="form-control" name="name" value="{{ old('name', isset($category) ? $category->name :  null) }}">
                    @error('name')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button class="button-blue" type="submit">
                @isset($category)
                    Save Data
                @else
                    Create Category
                @endisset
            </button>
            <a href="{{ route('categories.index')  }}">
                <button type="button" class="button-blue">Cancel</button>
            </a>
        </form>
    </div>
@endsection

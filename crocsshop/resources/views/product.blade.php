@extends('master')

@section('title', $product->name)
@section('content')
    <div class="section product-main">
            <div class="container">
                <div class="row">
                    <div class="product-column-1">
                        <img class="product-image" src="{{ Storage::url($product->image) }}" alt="">
                        <div class="owl-carousel owl-theme product-img-carousel">
                            <div class="item">
                                <img src="{{ Storage::url($product->image) }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ Storage::url($product->image) }}" alt="">
                            </div>
                        </div>
                        <div class="product-desc-name">
                            {{ $product->name }}
                        </div>
                        <div class="product-desc-id">
                            Item #{{ $product->id }}
                        </div>
                        <div class="product-desc">
                            {{ $product->description }}
                            Not a toy. Not intended for children under 3 years of age.
                        </div>
                    </div>
                    <div class="product-column-2">
                        <div class="product-name">
                            {{ $product->name }}
                        </div>
                        <div class="product-name">
                            {{ $product->category->name }}
                        </div>
                        <div class="product-price">
                            ${{ $product->price }}
                        </div>
                        <form action="{{ route('cart-add', $product->id) }}" method="POST">
                        <div class="product-quantity">
                            <label for="">Quantity:</label>
                            <div class="product-input">
                                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                                <input type="number" name="count" id="count" value="1" />
                                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                            </div>
                        </div>
                        <div class="product-buttons">
                                <button type="submit" class="product-cart-btn">Add to Cart</button>
                                <button class="product-fav-btn">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                        </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

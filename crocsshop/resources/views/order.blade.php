@extends('master')

@section('title', 'Shopping Cart')
@section('content')
    <div class="container">
        <h3 class="cart-header">Order #{{ $order->id }}
            <span>({{ $order->getProductsCount() }} Items)</span>
        </h3>
        <h3 class="cart-items-sum">
            <span class="text-18 text-bold">Item Total:</span>
            <span class="text-18 text-bold">${{ $order->getFullPrice() }}</span>
        </h3>
        <div class="row">
            <div class="cart-items">
                <ul class="cart-items-list list-unstyled">
                    @foreach($order->products->reverse() as $product)
                    <li class="cart-item">
                        <div class="cart-item-img">
                            <a href="{{ route('product', $product->code) }}">
                                <img src="{{ Storage::url($product->image) }}" alt="">
                            </a>
                        </div>
                        <div class="cart-item-content">
                            <a href="{{ route('product', $product->code) }}">
                                <h1 class="cart-item-header text-18 text-bold text-black">{{ $product->name }}</h1>
                            </a>
                            <span class="">x{{ $product->pivot->count }}</span>
                            <div class="cart-item-price">
                                <span class="text-bold">${{ $product->getPriceForCount() }}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="cart-summary">
                <h2 class="text-20 text-bold">Order Summary</h2>
                <div class="cart-summary-list">
                    <div class="d-flex bottom-border p-2">
                        <div class="text-bold">Item Subtotal:</div>
                        <div class="text-bold ml-auto">${{ $order->getFullPrice() }}</div>
                    </div>
                    <div class="d-flex bottom-border p-2">
                        <div class="text-bold">Sales Tax:</div>
                        <div class="text-bold ml-auto">Calculated at Checkout</div>
                    </div>
                    <div class="d-flex bottom-border p-2">
                        <div class="text-bold">Shipping:</div>
                        <div class="text-bold ml-auto">$0</div>
                    </div>
                    <div class="d-flex bottom-border p-2">
                        <div class="text-bold">Estimated Total</div>
                        <div class="text-bold ml-auto">${{ $order->getFullPrice() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

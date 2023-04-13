@extends('master')

@section('title', 'Checkout')
@section('content')
    <div class="container">
        <h3 class="cart-header">Checkout</h3>
        <h3 class="cart-items-sum">
            <span class="text-18 text-bold">Order Total:</span>
            <span class="text-18 text-bold">${{ $order->getFullPrice() }}</span>
        </h3>
        <form action="{{ route('confirm') }}" method="POST">
            <div class="checkout-form">
                <div class="input-field">
                    <label for="name">Enter your name</label>
                    <input id="name" type="text" class="input-field-input" name="name">
                </div>
                <div class="input-field">
                    <label for="phone">Enter your phone</label>
                    <input id="phone" type="phone" class="input-field-input" name="phone">
                </div>
                <button class="button-black" type="submit" >Place order</button>
            </div>
            @csrf
        </form>
    </div>
@endsection

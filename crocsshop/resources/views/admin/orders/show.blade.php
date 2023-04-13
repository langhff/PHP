@extends('master')

@section('title', 'Order #' . $order->id)
@section('content')
    <div class="container">
        <h3 class="cart-header">Order #{{ $order->id }}</h3>

        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">#</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="id" value="{{ $order->id }}">
            </div>
            <label for="name" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="name" value="{{ $order->name }}">
            </div>
            <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="phone" value="{{ $order->phone }}">
            </div>
            <label for="created_at" class="col-sm-2 col-form-label">Created At:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="created_at" value="{{ $order->created_at }}">
            </div>
            <label for="total" class="col-sm-2 col-form-label">Order Total:</label>
            <div class="col-sm-10 mb-5">
                <input type="text" class="form-control-plaintext" name="total" value="${{ $order->getFullPrice() }}">
            </div>

            <table class="table">
                <thead>
                <tr>
                    @if (Auth::user()->isAdmin())<th scope="col">#</th>@endif
                    <th scope="col">Image</th>
                    @if (Auth::user()->isAdmin())<th scope="col">Code</th>@endif
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        @if (Auth::user()->isAdmin())<th scope="row">{{ $product->id }}</th>@endif
                        <td><img height="100px" src="{{ Storage::url($product->image) }}" alt=""></td>
                        @if (Auth::user()->isAdmin())<td>{{ $product->code }}</td>@endif
                        <td>{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td>x{{ $product->pivot->count }}</td>
                        <td>${{ $product->getPriceForCount() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        <a href="
            @if (Auth::user()->isAdmin())
                {{ route('orders') }}">
            @else
                {{ route('person.orders.index') }}">
            @endif
            <button type="button" class="button-blue">Return</button>
        </a>
    </div>
@endsection

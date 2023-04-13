@extends('master')

@section('title', 'Orders')
@section('content')
    <div class="container">
        <h3 class="cart-header">Orders</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Created Date</th>
                <th scope="col">Order Total</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>${{ $order->getFullPrice() }}</td>
                    <td>
                        <a href="{{ route('order', $order->id) }}">
                            <button class="button-blue">Открыть</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

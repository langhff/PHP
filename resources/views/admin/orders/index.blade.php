@extends('master')

@section('title', 'Orders')
@section('content')
    @if (Auth::user()->isAdmin())
        @include('layouts/admin')
    @endif
    <div class="container">
        <h3 class="cart-header">@if (Auth::user()->isAdmin()) Orders @else My Orders @endif</h3>
        @if ($orders->count() !== 0)
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
                        <a href="
                            @if (Auth::user()->isAdmin())
                            {{ route('orders.show', $order) }}
                            @else
                            {{ route('person.orders.show', $order) }}
                            @endif">
                            <button class="button-blue">Show</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <span class="text-18 text-bold">You don't have orders yet!</span>
        @endif
    </div>
@endsection

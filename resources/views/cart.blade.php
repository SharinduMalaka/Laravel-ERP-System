@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Your Shopping Cart</h2>
        
        @if(session('cart') && count(session('cart')) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $item)
                        <tr>
                            <td>{{ $item['productName'] }}</td>
                            <td>${{ $item['price'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td><img src="{{ asset('storage/' . $item['image']) }}" width="50"></td>
                            <td>
                                <form action="{{ route('cart.remove', $item['productID']) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Your cart is empty.</p>
        @endif

        <a href="{{ route('products.list') }}" class="btn btn-primary">Continue Shopping</a>
    </div>
@endsection

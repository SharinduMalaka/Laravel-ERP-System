@extends('layouts.app')

@section('content')
    <div class="bg-gray-100">

        <!-- Navbar -->
        <header class="bg-green-600 text-white">
            <div class="container mx-auto flex items-center justify-between py-4 px-6">
                <!-- Logo and Name -->
                <span class="text-3xl font-bold tracking-wider">SuperFresh.LK</span>
                <nav class="flex items-center space-x-6">
                    <a href="/" class="hover:text-gray-200 text-lg">Home</a>
                    <a href="{{ route('products.list') }}" class="hover:text-gray-200 text-lg">Products</a>
                    <a href="{{ route('cart.index') }}" class="hover:text-gray-200 text-lg">Cart</a>
                    <button onclick="location.href='/account'" class="bg-white text-green-600 px-4 py-2 rounded-lg hover:bg-gray-100">Account</button>
                </nav>
            </div>
        </header>

        <!-- Cart Items -->
        <div class="container mx-auto py-6">
            <h1 class="text-2xl font-bold">Your Shopping Cart</h1>
            
            @if(count($cart) > 0)
                <table class="table-auto w-full mt-6">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Product</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">Quantity</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td class="border px-4 py-2">{{ $item['productName'] }}</td>
                                <td class="border px-4 py-2">${{ $item['price'] }}</td>
                                <td class="border px-4 py-2">{{ $item['quantity'] }}</td>
                                <td class="border px-4 py-2">
                                    <form action="{{ route('cart.remove', ['id' => $item['productID']]) }}" method="POST">
                                        @csrf
                                        <button class="bg-red-500 text-white px-4 py-2 rounded-lg">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Your cart is empty.</p>
            @endif
        </div>

        <!-- Footer -->
        <footer id="contact" class="bg-green-700 text-white py-10">
            <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <div>
                    <h2 class="text-xl font-bold mb-2">SuperFresh.LK</h2>
                    <p class="text-sm text-gray-300">Your one-stop shop for fresh groceries, daily essentials, and more.</p>
                    <p class="mt-2 text-gray-300">© 2024 SuperFresh.lk. All rights reserved.</p>
                </div>

                <div>
                    <h2 class="text-xl font-bold mb-2">Quick Links</h2>
                    <ul class="text-gray-300 space-y-2">
                        <li><a href="/" class="hover:text-gray-100">Home</a></li>
                        <li><a href="{{ route('products.list') }}" class="hover:text-gray-100">Products</a></li>
                        <li><a href="/contact" class="hover:text-gray-100">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl font-bold mb-2">Contact Us</h2>
                    <p class="text-gray-300">Email: <a href="mailto:support@superfreshlk@gmail.com" class="underline hover:text-gray-100">support@supermarket.com</a></p>
                    <p class="text-gray-300">Phone: <a href="tel:+96768441535" class="hover:text-gray-100">+94 768 441 535</a></p>

                    <!-- Social Media Icons -->
                    <div class="flex justify-center md:justify-start space-x-4 mt-4">
                        <a href="#" class="hover:text-gray-100 text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-gray-100 text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-100 text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-100 text-xl"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        
    </div>
@endsection

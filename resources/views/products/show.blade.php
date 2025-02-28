<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-green-600 text-white">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <span class="text-3xl font-bold tracking-wider">SuperFresh.LK</span>
            <nav class="flex items-center space-x-6">
                <a href="/" class="hover:text-gray-200 text-lg">Home</a>
                <a href="{{ route('products.index') }}" class="hover:text-gray-200 text-lg">Products</a>
                <a href="{{ route('cart.index') }}" class="hover:text-gray-200 text-lg">Cart</a>
                <button onclick="location.href='/account'" class="bg-white text-green-600 px-4 py-2 rounded-lg hover:bg-gray-100">Account</button>
            </nav>
        </div>
    </header>

    <!-- Product Details -->
    <main class="container mx-auto mt-8 p-4">
        <div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover rounded-lg mb-4">
            
            <h1 class="text-2xl font-bold mb-2">{{ $product->name }}</h1>
            <p class="text-gray-600 mb-4">{{ $product->description }}</p>
            <p class="text-green-600 font-semibold text-xl">Price: ${{ number_format($product->price, 2) }}</p>

            <!-- Add to Cart Form -->
            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-4">
                @csrf
                <label for="quantity" class="block text-gray-700 font-medium">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1" class="border border-gray-300 rounded-lg p-2 w-16 text-center mb-4">

                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">Add to Cart</button>
            </form>
        </div>
    </main>

</body>
</html>

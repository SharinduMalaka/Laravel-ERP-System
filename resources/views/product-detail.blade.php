<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->productName }} - Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-green-600 text-white">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <a href="/" class="text-3xl font-bold tracking-wider">Supermarket</a>
            <nav class="flex items-center space-x-6">
                <a href="/" class="hover:text-gray-200 text-lg">Home</a>
                <a href="/products" class="hover:text-gray-200 text-lg">Products</a>
                <a href="{{ route('cart.index') }}" class="hover:text-gray-200 text-lg">Cart</a>
                <button onclick="location.href='/account'" class="bg-white text-green-600 px-4 py-2 rounded-lg hover:bg-gray-100">Account</button>
            </nav>
        </div>
    </header>

    <!-- Product Details -->
    <section class="py-12">
        <div class="container mx-auto max-w-4xl bg-white p-6 rounded-lg shadow-lg">
            <div class="flex flex-wrap">
                <!-- Product Image -->
                <div class="w-full sm:w-1/2">
                    <img src="/{{ $product->image }}" alt="{{ $product->productName }}" class="w-full h-64 object-cover rounded-lg">
                </div>
                <!-- Product Info -->
                <div class="w-full sm:w-1/2 pl-6">
                    <h1 class="text-2xl font-bold text-green-600">{{ $product->productName }}</h1>
                    <p class="text-gray-700 mt-4">{{ $product->description }}</p>
                    <p class="text-lg font-bold mt-4">${{ $product->price }}</p>

                    <!-- Add to Cart Button -->
                    <button onclick="window.location.href='/cart/add/{{ $product->productID }}'" 
                            class="mt-6 w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
<footer id="contact" class="bg-green-700 text-white py-10">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
        
        <!-- Company Info -->
        <div>
            <h2 class="text-xl font-bold mb-2">SuperFresh.LK</h2>
            <p class="text-sm text-gray-300">Your one-stop shop for fresh groceries, daily essentials, and more.</p>
            <p class="mt-2 text-gray-300">© 2024 SuperFresh.lk. All rights reserved.</p>
        </div>

        <!-- Quick Links -->
        <div>
            <h2 class="text-xl font-bold mb-2">Quick Links</h2>
            <ul class="text-gray-300 space-y-2">
                <li><a href="/" class="hover:text-gray-100">Home</a></li>
                <li><a href="/products" class="hover:text-gray-100">Products</a></li>
                <li><a href="/contact" class="hover:text-gray-100">Contact</a></li>
            </ul>
        </div>

        <!-- Contact & Social Media -->
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

</body>
</html>

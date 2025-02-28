<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

   <!-- Navbar -->
   <header class="bg-green-600 text-white">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
 <!-- Logo and Name -->
            
                        <span class="text-3xl font-bold tracking-wider">SuperFresh.LK</span>
                    </a>
                <nav class="flex items-center space-x-6">
                <a href="/" class="hover:text-gray-200 text-lg">Home</a>
                <a href="/products" class="hover:text-gray-200 text-lg">Products</a>
                <a href="{{ route('cart.index') }}" class="hover:text-gray-200 text-lg">Cart</a>
                <button onclick="location.href='/account'" class="bg-white text-green-600 px-4 py-2 rounded-lg hover:bg-gray-100">Account</button>
            </nav>
        </div>
    </header>

    <!-- Categories Section -->
    <section class="py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-green-600 mb-8">Shop by Category</h2>
            <div id="categories" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    @foreach($categories as $category)
        <div class="bg-white p-4 rounded-lg shadow">
        <img src="{{ asset($category->image) }}" alt="{{ $category->categoryName }}" class="w-full h-40 object-cover rounded-t-lg">
        <h3 class="text-lg font-bold mt-4">{{ $category->categoryName }}</h3>
            <p class="text-gray-700">{{ $category->categoryDescription }}</p>
            <button onclick="window.location.href='/Category/{{ $category->categoryID }}'" 
                    class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
                View Items
            </button>
        </div>
    @endforeach
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

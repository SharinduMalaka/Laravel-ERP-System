<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperFresh.LK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <header class="bg-green-600 text-white">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
 <!-- Logo and Name -->
            
                        <span class="text-3xl font-bold tracking-wider">SuperFresh.LK</span>
                <nav class="flex items-center space-x-6">
                <a href="/" class="hover:text-gray-200 text-lg">Home</a>
                <a href="/products" class="hover:text-gray-200 text-lg">Products</a>
                <a href="{{ route('cart.index') }}" class="hover:text-gray-200 text-lg">Cart</a>
                <button onclick="location.href='/account'" class="bg-white text-green-600 px-4 py-2 rounded-lg hover:bg-gray-100">Account</button>
            </nav>
        </div>
    </header>

   <!-- Hero Section -->
<section class="relative bg-gray-100">
    <!-- Slider Container -->
    <div class="hero-slider relative overflow-hidden h-80 sm:h-96 lg:h-120">
        <div class="slide bg-cover bg-center bg-no-repeat absolute inset-0 transition-opacity duration-1000 opacity-0" 
             style="background-image: url('{{ asset('storage/images/supermarket1.jpg') }}');"></div>
        <div class="slide bg-cover bg-center bg-no-repeat absolute inset-0 transition-opacity duration-1000 opacity-0" 
             style="background-image: url('{{ asset('storage/images/slide.jpg') }}');"></div>
        <div class="slide bg-cover bg-center bg-no-repeat absolute inset-0 transition-opacity duration-1000 opacity-0" 
             style="background-image: url('{{ asset('storage/images/supermarket3.jpg') }}');"></div>
    </div>

    <!-- Content Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-5xl font-extrabold drop-shadow-lg">Welcome to SuperFresh.LK</h1>
            <p class="text-xl text-gray-100 mt-4 drop-shadow">Your one-stop shop for fresh groceries, daily essentials, and more!</p>
            <button onclick="window.location.href='/categories';"
        class="mt-8 px-8 py-3 bg-yellow-500 text-white font-bold text-xl rounded-lg hover:bg-yellow-600 shadow-lg">
    Shop Now
</button>

        </div>
    </div>
</section>

<script>
    // JavaScript for Sliding Images
    const slides = document.querySelectorAll('.hero-slider .slide');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Start the slider
    showSlide(currentSlide);
    setInterval(nextSlide, 5000); // Change slide every 5 seconds
</script>


  <!-- Featured Products Section -->
<section id="products" class="py-12 bg-gray-50">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center text-green-600 mb-8">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Product Card -->
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition">
                <img src="storage/images/carrots.jpg" alt="Carrot" class="w-full h-40 object-cover rounded-t-lg">
                <h3 class="text-lg font-bold mt-4">Carrot</h3>
                <p class="text-gray-700">$1.00 each</p>
                <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">Add to Cart</button>
            </div>
            <!-- Repeat Product Cards -->
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition">
                <img src="storage/images/banana.jpg" alt="Banana" class="w-full h-40 object-cover rounded-t-lg">
                <h3 class="text-lg font-bold mt-4">Banana</h3>
                <p class="text-gray-700">$0.50 each</p>
                <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">Add to Cart</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition">
                <img src="storage/images/milk.jpg" alt="Milk" class="w-full h-40 object-cover rounded-t-lg">
                <h3 class="text-lg font-bold mt-4">Milk</h3>
                <p class="text-gray-700">$3.00</p>
                <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">Add to Cart</button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition">
                <img src="storage/images/bread.jpg" alt="Bread" class="w-full h-40 object-cover rounded-t-lg">
                <h3 class="text-lg font-bold mt-4">Bread</h3>
                <p class="text-gray-700">$2.50</p>
                <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">Add to Cart</button>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="relative py-12 overflow-hidden">
    <div class="absolute inset-0 bg-green-600 opacity-30"></div> <!-- Semi-transparent background -->
    <div class="relative container mx-auto text-center px-6 text-white">
        <h2 class="text-3xl font-bold mb-4">Subscribe to Our Newsletter</h2>
        <p class="text-lg mb-6">Stay updated with our latest deals and discounts!</p>
        <form class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
            <input type="email" placeholder="Enter your email" 
                   class="w-full sm:w-96 px-4 py-3 rounded-lg text-gray-900 focus:outline-none">
            <button type="submit" 
                    class="bg-green-600 px-6 py-3 rounded-lg font-bold hover:bg-green-700 transition">
                Subscribe
            </button>
        </form>
        
        <!-- Floating Product Images
        <div class="flex justify-center gap-6 relative">
            <img src="storage/images/banana.jpg" alt="Banana" 
                 class="w-24 h-24 sm:w-32 sm:h-32 rounded-lg shadow-lg transform hover:scale-110 transition duration-500 animate-float">
            <img src="storage/images/milk.jpg" alt="Milk" 
                 class="w-24 h-24 sm:w-32 sm:h-32 rounded-lg shadow-lg transform hover:scale-110 transition duration-500 animate-float animation-delay-200">
            <img src="storage/images/bread.jpg" alt="Bread" 
                 class="w-24 h-24 sm:w-32 sm:h-32 rounded-lg shadow-lg transform hover:scale-110 transition duration-500 animate-float animation-delay-400">
        </div> -->
    </div>
</section>

<!-- Floating Animation -->
<!-- <style>
    @keyframes float {
        0% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0); }
    }
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    .animation-delay-200 { animation-delay: 0.2s; }
    .animation-delay-400 { animation-delay: 0.4s; }
</style> -->



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

<!-- FontAwesome for Icons -->
<script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>



</body>
</html>
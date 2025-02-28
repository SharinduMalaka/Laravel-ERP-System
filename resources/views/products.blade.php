<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Navbar -->
        <header class="bg-green-600 text-white">
            <div class="container mx-auto flex items-center justify-between py-4 px-6">
                <span class="text-3xl font-bold tracking-wider">SuperFresh.LK</span>
                <nav class="flex items-center space-x-6">
                    <a href="/" class="hover:text-gray-200 text-lg">Home</a>
                    <a href="/products" class="hover:text-gray-200 text-lg">Products</a>
                    <a href="{{ route('cart.index') }}" class="hover:text-gray-200 text-lg">Cart</a>
                    <button onclick="location.href='/account'" class="bg-white text-green-600 px-4 py-2 rounded-lg hover:bg-gray-100">Account</button>
                </nav>
            </div>
        </header>

        <!-- Products List -->
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6" id="productsContainer">
            <div class="bg-white p-4 rounded-lg shadow-md" data-name="Apple">
                <img src="storage/images/apple.jpg" alt="Apple" class="w-full h-40 object-cover rounded-lg">
                <h3 class="text-lg font-semibold mt-2">Apple</h3>
                <p class="text-gray-600">Fresh red apples from the farm.</p>
                <p class="text-green-600 font-bold mt-1">$120</p>
                <form action="{{ route('cart.add', 'P001') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 mt-2">Add to Cart</button>
                </form>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md" data-name="Carrots">
                <img src="storage/images/carrots.jpg" alt="Carrots" class="w-full h-40 object-cover rounded-lg">
                <h3 class="text-lg font-semibold mt-2">Carrots</h3>
                <p class="text-gray-600">Crunchy and healthy carrots.</p>
                <p class="text-green-600 font-bold mt-1">$80</p>
                <form action="{{ route('cart.add', 'P002') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 mt-2">Add to Cart</button>
                </form>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md" data-name="Milk">
                <img src="storage/images/milk.jpg" alt="Milk" class="w-full h-40 object-cover rounded-lg">
                <h3 class="text-lg font-semibold mt-2">Milk</h3>
                <p class="text-gray-600">Pure fresh milk from dairy farms.</p>
                <p class="text-green-600 font-bold mt-1">$200</p>
                <form action="{{ route('cart.add', 'P003') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 mt-2">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript for Search Functionality -->
    <script>
        document.getElementById('searchBar').addEventListener('input', function () {
            let filter = this.value.toLowerCase();
            let items = document.querySelectorAll('#productsContainer > div');
            items.forEach(item => {
                let name = item.getAttribute('data-name').toLowerCase();
                if (name.includes(filter)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
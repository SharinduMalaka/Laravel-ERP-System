<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite('resources/css/app.css')
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
                <button onclick="location.href='/account'" class="bg-white text-green-600 px-4 py-2 rounded-lg hover:bg-gray-100">
                    Account
                </button>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="min-h-screen flex items-center justify-center py-12">
        <div class="flex flex-col md:flex-row w-full max-w-4xl space-y-6 md:space-y-0 md:space-x-6 px-4">
            <!-- Login Form -->
            <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-green-600 text-center mb-6">Login</h2>
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                        <input type="email" name="email" id="email" required
                               class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                        <input type="password" name="password" id="password" required
                               class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="h-4 w-4 text-green-600 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-600">Remember Me</label>
                    </div>
                    <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 focus:ring-2 focus:ring-green-400">
                        Login
                    </button>
                </form>
            </div>

            <!-- Register Form -->
            <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-green-600 text-center mb-6">Register</h2>
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700">First Name:</label>
                        <input type="text" name="firstName" id="firstName" required
                               class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name:</label>
                        <input type="text" name="lastName" id="lastName" required
                               class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                        <input type="email" name="email" id="email" required
                               class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                        <input type="password" name="password" id="password" required
                               class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                               class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 focus:ring-2 focus:ring-green-400">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    @if($errors->any())
    <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</body>
</html>

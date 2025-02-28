@foreach ($products as $product)
    <div class="bg-white p-4 rounded-lg shadow-lg">
        <img src="{{ asset($product->image) }}" class="w-full h-40 object-cover mb-4 rounded-lg">
        <h2 class="text-lg font-bold">{{ $product->productName }}</h2>
        <p class="text-gray-600">{{ $product->productDescription }}</p>
        <p class="text-green-600 font-semibold mt-2">Rs. {{ $product->price }}</p>
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="mt-2 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">
                Add to Cart
            </button>
        </form>
    </div>
@endforeach
#         </div>
#     </div>    
# </footer>


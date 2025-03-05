<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Add product to cart
    public function addToCart(Request $request)
    {
        $cart = Session::get('cart', []);

        // Add the product details to the cart
        $cart[] = [
            'productID' => $request->productID,
            'productName' => $request->productName,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $request->image
        ];

        // Store the updated cart in the session
        Session::put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Product added to cart']);
    }

    // View cart
    public function viewCart()
    {
        $cart = session('cart', []);
        return view('cart', compact('cart'));
    }

    // Remove product from the cart
    public function removeFromCart($productID)
    {
        $cart = session()->get('cart', []);

        // Iterate through the cart and remove the product with the matching productID
        foreach ($cart as $index => $item) {
            if ($item['productID'] == $productID) {
                unset($cart[$index]); // Unset the product
                break; // Exit loop after removal
            }
        }

        // Reindex the cart to avoid gaps in the array
        $cart = array_values($cart);

        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Product removed from cart.');
    }

    // Index cart page
    public function index()
    {
        $cart = session('cart', []);
        return view('cart.index', compact('cart'));
    }
}

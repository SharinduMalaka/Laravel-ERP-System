<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function addToCart($productID)
    {
        $product = Product::findOrFail($productID);

        $cart = session()->get('cart', []);

        if (isset($cart[$productID])) {
            $cart[$productID]['quantity']++;
        } else {
            $cart[$productID] = [
                'name' => $product->productName,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }

    // Update cart item quantity
    public function update(Request $request, $productID)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$productID])) {
            $quantity = (int) $request->input('quantity');
            $cart[$productID]['quantity'] = max(1, $quantity);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }

    // Remove an item from the cart
    public function remove($productID)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$productID])) {
            unset($cart[$productID]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }

    // Clear the cart
    public function clear()
    {
        session()->forget('cart');

        return redirect()->route('cart.index')->with('success', 'Cart cleared!');
    }

        public function showCart()
    {
        return view('cart.index');
    }

}

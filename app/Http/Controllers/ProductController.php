<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    // View products under a specific category
    public function ViewCategoryItems($categoryID)
    {
        // Fetch the specific category
        $category = Category::find($categoryID);

        if (!$category) {
            return abort(404, 'Category not found.');
        }

        // Fetch products belonging to the specified category
        $products = Product::where('categoryID', $categoryID)->get();

        return view('category-items', compact('category', 'products'));
    }

    // Display all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show product details
    public function show($productID)
    {
        $product = Product::findOrFail($productID);
        return view('product-details', compact('product'));
    }

    // Get product details as JSON
    public function details($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    // Search products
    public function search(Request $request)
    {
        $query = $request->input('search');

        $products = Product::where('productName', 'LIKE', "%{$query}%")
                            ->orWhere('productDescription', 'LIKE', "%{$query}%")
                            ->get();

        return view('products.index', compact('products'));
    }
}

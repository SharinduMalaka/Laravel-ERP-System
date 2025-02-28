<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function ViewAllCategories()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function show($id)
    {
        // Fetch the category by its ID
        $category = Category::findOrFail($id);

        // Fetch products that belong to the category
        $products = Product::where('categoryID', $id)->get();

        // Pass data to the view
        return view('category-items', compact('category', 'products'));
    }
}

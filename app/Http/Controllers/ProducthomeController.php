<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProducthomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        $categories = Category::all();
        return view('products', compact('products','categories')); // Pass products to the view
    }
}

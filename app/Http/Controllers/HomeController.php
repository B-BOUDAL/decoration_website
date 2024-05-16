<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('accueil',compact('categories'));
    }
    function category($id) {
        $categories = Category::all();
        $category = Category::find($id);
        $products = $category->products;
        return view('tables',compact('categories','category','products'));
    }
    function about() {
        $categories = Category::all();
        return view('about-us',compact('categories'));
    }
    function contact() {
        $categories = Category::all();
        return view('contact-us',compact('categories'));
    }
    function shop() {
        $categories = Category::all();
        return view('shop',compact('categories'));
    }
}

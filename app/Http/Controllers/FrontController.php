<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $cheapestProducts = Product::all()->sortBy('price')->take(10);
        $categories = Category::all();
        return view('home', ['cheapestProducts' => $cheapestProducts, 'categories' => $categories]);
    }
}

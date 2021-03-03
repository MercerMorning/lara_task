<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Product $product)
    {
        session()->push('orders', $product);
        return redirect()->route('basket.index');
    }
}

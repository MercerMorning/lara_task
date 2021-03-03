<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        $orders =  session()->get('orders');
        return view('basket/index', ['orders' => $orders]);
    }
}

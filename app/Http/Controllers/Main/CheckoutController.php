<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartitems = \Cart::session('guest')->getContent();

        return view('main.cart.checkout', [
            'cartitems' => $cartitems,
        ]);
    }

    public function order_completed()
    {
        return view('main.cart.order-completed');
    }
}

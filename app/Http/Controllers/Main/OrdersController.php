<?php

namespace App\Http\Controllers\Main;

use App\Models\Orders;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'payment' => 'required|string|max:255',
        ]);

        $order = new Orders();

        $order->order_number = uniqid('PH-');

        $order->shipping_email = $request->input('email');
        $order->shipping_firstname = $request->input('firstname');
        $order->shipping_lastname = $request->input('lastname');
        $order->shipping_address = $request->input('address');
        $order->shipping_apartment = $request->input('apartment');
        $order->shipping_city = $request->input('city');
        $order->shipping_country = $request->input('country');
        $order->shipping_state = $request->input('state');
        $order->shipping_postal = $request->input('postal');
        $order->shipping_phone = $request->input('phone');
        $order->payment_method = $request->input('payment');

        $order->grand_total =  \Cart::session('guest')->getTotal();
        $order->item_count = \Cart::session('guest')->getContent()->count();

        $order->save();

        $cartItems = \Cart::session('guest')->getContent();

        foreach($cartItems as $item){
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        }

        //empty the cart
        \Cart::clear();
        \Cart::session('guest')->clear();

        dd($order->items());
    }
}

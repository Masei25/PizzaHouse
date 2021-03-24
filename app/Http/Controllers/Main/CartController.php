<?php

namespace App\Http\Controllers\Main;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $cartitems = \Cart::session('guest')->getContent();
        return view('main.cart.index', [
            'cartitems' => $cartitems
        ]);
    }

    public function add(Request $request)
    {
        $productid = $request->productid;
        $product = Items::find($productid);

        $cart = \Cart::session('guest')->add(array(
            'id' => $productid,
            'name' => $product->item_name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT 12.5%',
            'type' => 'tax',
            'target' => art::session('guest')->getSubTotal(),
            'value' => 0.5,
        ));

        Cart::condition($condition);
        Cart::session('condit')->condition($condition);

        return back()->with('success', 'Item added to cart');
    }

    public function update(Request $request)
    {
        $itemid = $request->itemid;
        $quantity = request('quantity');
        \Cart::session('guest')->update($itemid,[
            'quantity' =>  array(
                'relative' => false,
                'value' => request('quantity')
            )
        ]);

        return back();
    }

    public function delete(Request $request)
    {
        $itemid =  $request->itemid;
        $cartitem = \Cart::session('guest')->remove($itemid);

        return back()->with('success', 'Item removed from cart');
    }
}

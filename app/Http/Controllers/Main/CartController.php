<?php

namespace App\Http\Controllers\Main;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        return view('main.cart.index');
    }

    public function add(Request $request)
    {
        $productid = $request->productid;
        $product = Items::find($productid);

        \Cart::session($productid)->add(array(
            'id' => $productid,
            'name' => $product->item_name,
            'price' => $product->price,
            'quantity' => 4,
            // 'attributes' => array(),
            'associatedModel' => $product
        ));

        return back();
    }
}

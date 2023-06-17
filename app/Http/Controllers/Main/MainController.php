<?php

namespace App\Http\Controllers\Main;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $pizzas = Items::where('item_type', 'pizza')
                    ->get();

        $burgers = Items::where('item_type', 'burger')
                    ->get();

        $beverages = Items::where('item_type', 'beverages')
                            ->get();

        return view('main/menu', [
            'pizzas' => $pizzas,
            'burgers' => $burgers,
            'beverages' => $beverages
        ]);
    }

    public function show(Request $request)
    {
        $itemslug = $request->itemslug;

        $item = Items::where('slug', $itemslug)
                        ->first();

        return view('main/item-info', [
            'item' => $item
        ]);
    }

    public function contact()
    {
        return view('main.contact');
    }

}

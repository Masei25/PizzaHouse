<?php

namespace App\Http\Controllers\Main;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function show(Request $request)
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
}

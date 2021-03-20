<?php

namespace App\Http\Controllers\Users;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        $items = Items::where('userid', $user->id)
                            ->get();

        return view('users/index', [
            'items' => $items
        ]);
    }


}

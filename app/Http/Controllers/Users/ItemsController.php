<?php

namespace App\Http\Controllers\Users;

use Image;
use App\Models\Items;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function index()
    {
        return view('users/additems');
    }

    public function store(Request $request)
    {
        $user =  $request->user();

        $items = new Items;

        $items->userid = $user->id;
        $items->item_name = request('itemname');
        $items->item_type = request('type');
        $items->price = request('price');

        $request->validate([
            'itemname' => 'required',
            'type' => 'required',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048'
        ]);

        $image = $request->file('image');

        $imageName = Str::random(15) .'.'. $image->extension();

        $imageResize = Image::make($image->path());

        $imageResize->resize(410, 540, function($constraint) {
            $constraint->aspectRatio();
        });

        $image->move(public_path('upload'), $imageName);

        $items->image = $imageName;

        $items->save();

        return redirect('users')->with('success', 'Item added successfully');

    }
}

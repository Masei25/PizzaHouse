<?php

namespace App\Http\Controllers\Users;

use Image;
use App\Models\Items;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function index()
    {
        return view('users/additems');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|unique:items',
            'type' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048'
        ]);

        $input = $request->all();

        $rand = Str::random('6');
        $image = $request->file('image');

        $imageName = $rand .'.'. $image->extension();

        $slug = $input['item_name'] . ' '. $rand;
        $slug = Str::slug($slug, '-');

        $imageResize = Image::make($image->path());

        $imageResize->resize(410, 540, function($constraint) {
            $constraint->aspectRatio();
        });

        Items::create([
            'userid' => Auth::user()->id,
            'item_name' => $input['item_name'],
            'item_type' => $input['type'],
            'price' => $input['price'],
            'quantity' => $input['quantity'],
            'image' => $imageName,
            'slug' => $slug
        ]);

        $image->move(public_path('upload'), $imageName);

        return redirect()->route('dashboard.show')->with('success', 'Item added successfully');

    }

    public function edit($slug) 
    {
        $item = Items::find($slug);
        
        if($item->exists()) {
            return view('users.edit', compact('item'));
        }

        return view('errors.404');
    }

    public function update(Request $request, $slug)
    {
        $item = Items::find($slug);

        if($item->exists()) {
            $request->validate([
                'item_name' => 'required|unique:items',
                'type' => 'required',
                'price' => 'required|integer',
                'quantity' => 'required|integer',
                'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048'
            ]);

            $image = $request->file('image');

            $imageName = $rand .'.'. $image->extension();

            $imageResize = Image::make($image->path());

            $imageResize->resize(410, 540, function($constraint) {
                $constraint->aspectRatio();
            });

            Items::update($slug, [
                'item_name' => $input['item_name'],
                'item_type' => $input['type'],
                'price' => $input['price'],
                'quantity' => $input['quantity'],
                // 'image' => $imageName,
                'slug' => $slug
            ]);

            return redirect()->route('dashboard.show')->with('success', 'Item Updated successfully');
        }
    }
}

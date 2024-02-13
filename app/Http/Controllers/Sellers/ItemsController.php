<?php

namespace App\Http\Controllers\Sellers;

use Image;
use App\Models\Items;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ItemsController extends Controller
{
    public function index()
    {
        return view('users/additems');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,gif|max:2048'
        ]);

        $input = $request->all();

        $rand = Str::random('10');
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
        $item = Items::where(['slug' => $slug])->first();
        
        if($item->exists()) {

            return view('users.edit', compact('item'));
        }

        return view('errors.404');
    }

    public function update(Request $request, $slug)
    {
        $item = Items::where(['slug' => $slug])->first();

        if($item->exists()) {
            $request->validate([
                'item_name' => 'required',
                'item_type' => 'required',
                'price' => 'required|integer',
                'quantity' => 'required|integer',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,svg,gif|max:2048',
                            Rule::when($request->has_image, ['required'])
            ]);

            $input = $request->only(['item_name', 'item_type', 'price', 'quantity']);

            // Check if the item_name is updated
            if ($input['item_name'] !== $item->item_name) {
                $slug = Str::slug($input['item_name'] . ' ' . Str::random(10), '-');
            }

            // Check if a new image is uploaded
            if ($request->hasFile('image')) {
                // Delete the old image file
                if ($item->image) {
                    $oldImagePath = public_path('upload/') . $item->image;
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                    }
                }

                // Process the new image
                $image = $request->file('image');
                $imageName = $slug . '.' . $image->extension();
                $imagePath = public_path('upload/') . $imageName;

                $imageResize = Image::make($image->path());
                $imageResize->resize(410, 540, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $imageResize->save($imagePath);

                $input['image'] = $imageName;
            }

            $input['slug'] = $slug;

            $item->update($input);

            return redirect()->route('dashboard.show')->with('success', 'Item Updated successfully');
        }
    }

    public function delete($slug)
    {
        $item = Items::where('slug', $slug)->first();

        if ($item) {
            
            $item->delete();

            return redirect()->route('dashboard.show')->with('success', 'Item deleted successfully');
        }

        return redirect()->route('dashboard.show')->with('error', 'Item not found');
    }

}

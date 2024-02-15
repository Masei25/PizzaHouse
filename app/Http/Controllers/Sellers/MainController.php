<?php

namespace App\Http\Controllers\Sellers;

use App\Models\User;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();

        $items = Items::where('userid', $user->id)->get();
        
        return view('users/index', ['items' => $items]);
    }

    public function showProfile($userid)
    {
        $user = User::find($userid);
        
        return view('users.profile', compact('user'));
    }

    public function updateProfile(Request $request, $userid)
    {
        $user = User::find($userid);

        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'business_name' => ['required', 'string', 'max:255'],
        ]);

        $input = $request->only(['firstname', 'lastname', 'business_name']);

        $user->update($input);

        return redirect()->route('dashboard.show')->with('success', 'Profile Updated');
    }


}

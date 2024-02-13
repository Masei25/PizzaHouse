<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function index()
    {
        return view('auth.login');
    }

    public function show(Request $request)
    {
        $user  = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($user)){
            if($request->user()->user_type == 'seller') {
                return redirect()->route('dashboard.show');
            }

            if($request->user()->user_type == 'buyer') {
                Auth::logout();
                return back()->with('error', "Buyer's dashboard coming soon");
            }
        }

        // dd('ehlloo');
        dd((Auth::attempt($user) && ($request->user()->user_type == 'seller')));

        if ((Auth::attempt($user) && ($request->user()->user_type == 'seller'))) {
            dd('required');
        }

        return back()->with('error', 'Invalid login credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

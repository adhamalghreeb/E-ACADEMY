<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Admin.auth.login');
    }

    public function doLogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:191',
            'password' => 'required|string',
        ]);

        if(!auth()->guard('admin')->attempt(['email' => $data['email'] , 'password' => $data['password']])){
            return back();
        }
        else{
            return redirect(route('admin.home'));
        }
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect(route('admin.login'));
    }
}

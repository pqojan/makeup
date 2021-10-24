<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function registerIndex()
    {
        return view('register');
    }

    public function register(Request $request)
    {
          $request->validate([
          'name'=> 'required',
          'password'=> 'required'
        ]);

         User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password)
        ]);
    }
    

    public function login(Request $request)
    {
         $request->validate([
          'name'=> 'required',
          'password'=> 'required'
        ]);
        
        if (Auth::attempt(['name' => $request->name,'password' => $request->password]))
         {
            return redirect()->route('admin');
         }
         else{
            Session::flash('failed', "Invalid login or password!");
            return redirect()->back();
         }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}

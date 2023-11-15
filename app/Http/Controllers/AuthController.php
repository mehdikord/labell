<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {


        return view('pages.register');

    }

    public function submit_register(Request $request)
    {

//        User::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//        ]);
        Category::create([
            'name' => $request->name
        ]);

        return back()->with(['message' => 'Register Success']);

    }
}

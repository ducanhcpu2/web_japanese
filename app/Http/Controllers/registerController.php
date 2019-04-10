<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function register(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|max:20|same:password',
        ],
            [
                'name.required' => 'Name is required',
                'name.min' => 'Name must be at least 2 characters.',
                'name.max' => 'Name should not be greater than 50 characters.',
            ]);
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->save();
        //auth()->login($user);

        return back()->with('success', 'User created successfully.');
    }
}

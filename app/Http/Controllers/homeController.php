<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/index');
    }
}

<?php

namespace App\Http\Controllers\API;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getUsers(Request $request)
    {
      $users =  User::all();
      return $users;
    }
}

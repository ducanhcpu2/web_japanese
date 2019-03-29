<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getIndex()
    {
      $users = DB::select('select * from users where user_id=1');
      return view('template.index',['users'=>$users]);
    }

    public function getGallery()
    {
        return view('template.page.gallery');
    }

    public function getAbout()
    {
        return view('template.page.about');
    }

    public function getContact()
    {
        return view('template.page.contact');
    }

    public function getLogin()
    {
        return view('template.page.login');
    }

    public function getRegister()
    {
      return view('template.page.register');
    }
}

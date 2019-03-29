<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getIndex()
    {
        return view('template.index');
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

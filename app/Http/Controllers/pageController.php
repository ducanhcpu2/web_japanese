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
        return view('template.gallery');
    }

    public function getAbout()
    {
        return view('template.about');
    }

    public function getContact()
    {
        return view('template.contact');
    }
}

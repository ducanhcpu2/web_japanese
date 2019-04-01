<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class pageController extends Controller
{
    public function getIndex()
    {
        $users = DB::select('select * from users where id=1');
        return view('template.index', ['users' => $users]);
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

    public function getAdmin()
    {
        return view('template.admin.admin');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required|email|',
                'pass' => 'required|min:6|max:20',
            ],
            [
                'email.email' => 'không đúng định dang email',
                'email.required' => 'vui lòng nhập lại email',
                'email.unique' => 'email đã có người sử dụng',
                'pass.required' => 'vui lòng nhập password',
                'pass.min' => 'mật khẩu ít nhất 6 ký tự',
                'pass.max' => 'mật khẩu không quá 10 ký tự'
            ]
        );
        $user = array('email' => $request->email, 'password' => $request->pass);
        if (Auth::Attempt($user)) {
            return redirect()->route('index');
        } else {
            return redirect()->back()->with(['flag' => 'danger', 'notification' => 'bạn đã đăng nhập không thành công']);
        }
    }

    public function getExams()
    {
        return View('template.page.exams');
    }
}

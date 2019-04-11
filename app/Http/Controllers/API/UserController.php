<?php

namespace App\Http\Controllers\API;

use App\Exams;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getInforUser()
    {
        return User::select('users.id', 'users.email', 'users.password', 'users.name', 'exams.id_exam', 'exams.topic'
            , 'exams.status', 'exams.level'
        )
            ->join('exams', 'users.id_exam', 'exams.id_exam')
            ->get();
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Tasks;
use App\Exams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamsController extends Controller
{
    public function getListExams()
    {
        $exams = Exams::all();
        return $exams;
    }

    public function getListQuestion()
    {
        return Tasks::all();
    }
}

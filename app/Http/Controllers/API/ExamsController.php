<?php

namespace App\Http\Controllers\API;

use App\Tasks;
use App\Exams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ExamsController extends Controller
{
    public function getListExams()
    {
        $exams = Exams::all();
        return $exams;
    }

    public function getListQuestion(Request $request)
    {
        return Tasks::select('tasks.id_task','tasks.content','tasks.sub_task_a','tasks.sub_task_b'
                            ,'tasks.sub_task_c','tasks.sub_task_d','tasks.key_text')
                            ->where('tasks.id_exam', $request->id_exam)->get();
    }

    public function getPoint(Request $request)
    {
        $idExam = $request->input('id_exam');
        $picked = $request->input('picked');
        $point = 0;

        $tasks = Tasks::where('id_exam', $idExam)->get();
        $tasks->each(function ($task, $index) use ($picked, &$point) {
            if ($task->solution === $picked[$index]) {
                ++$point;
            }
        });

        return $point;
    }
}

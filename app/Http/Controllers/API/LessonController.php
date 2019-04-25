<?php

namespace App\Http\Controllers\API;

use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function getListLesson()
    {
        return Lesson::all();
    }

    public function getContentLesson(Request $request)
    {
        $lesson = $request->id_lesson;
        $query = Lesson::select('lesson.id_lesson','lesson_name', 'id_gra', 'grammar.content'
            , 'id_voca', 'vocabularry.content', 'mean', 'sound')
            ->join('vocabularry', 'vocabularry.id_lesson', 'lesson.id_lesson')
            ->join('grammar', 'grammar.id_lesson', 'lesson.id_lesson')
            ->where('lesson.id_lesson', 1)
            ->get();
        //$query = $query->where('lesson.id_lesson', 1)->get();
        return $query;
    }
}

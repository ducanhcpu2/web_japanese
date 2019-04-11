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
        $query = Lesson::select('lesson_name', 'id_grammar', 'grammar.content'
            , 'id_voca', 'vocabularry.content', 'mean', 'sound')
            ->join('vocabularry', 'vocabularry.id_voca', 'lesson.id_voca')
            ->join('grammar', 'grammar.id_gra', 'lesson.id_gra')
            ->where('id_lesson', $lesson)
            ->get();
        return $query;
    }
}

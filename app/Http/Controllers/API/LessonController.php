<?php

namespace App\Http\Controllers\API;

use App\Grammar;
use App\Lesson;
use App\Vocabularry;
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

    public function getVoca(Request $request)
    {
        return vocabularry::select('id_voca','content','mean','kanji')
            ->where('id_lesson',$request->id_lesson)
            ->get();

    }

    public function getGrammar(Request $request)
    {
        return grammar::select('id_gra','content')
            ->where('id_lesson',$request->id_lesson)
            ->get();
    }
}

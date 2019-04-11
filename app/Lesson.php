<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lesson';

    protected $fillable = ['id_lesson', 'id_gra', 'id_voca', 'lesson_name', 'updated_at', 'created_at'];

    public function grammar()
    {
        return $this->hasMany(Grammar::class);
    }

    public function vacabularry()
    {
        return $this->hasMany(Vocabularry::class);
    }
}

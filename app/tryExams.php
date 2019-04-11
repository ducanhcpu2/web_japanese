<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tryExams extends Model
{
    protected $table = 'try_exams';
    public $timestamps = false;
    public $fillable
        = [
            'id_try',
            'try_times',
            'id_detail',
        ];

    public function tryExams()
    {
        return $this->hasMany(detailTryExam::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected $table = 'exams';
    public $timestamps = false;
    public $fillable
        = [
            'id_exam',
            'topic',
            'status',
            'level',
        ];

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }

}

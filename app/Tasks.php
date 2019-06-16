<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'tasks';
    public $timestamps = false;
    public $fillable
        = [
            'id_task',
            'id_exam',
            'content',
            'master_picture',
            'picture_1',
            'picture_2',
            'picture_3',
            'picture_4',
            'sound',
            'sub_task_a',
            'sub_task_b',
            'sub_task_c',
            'sub_task_d',
            'key_text',
            'solution',

        ];
    protected $hidden
        = [
             'solution',
        ];
}

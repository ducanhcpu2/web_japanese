<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailTryExam extends Model
{
    protected $table = 'detail_try_exam';

    protected $fillable = ['id_detail', 'date_create', 'point', 'times'];
}

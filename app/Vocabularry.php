<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabularry extends Model
{
    protected $table = 'vocabularry';
    protected $fillable = ['id_voca', 'content', 'mean', 'sound', 'updated_at', 'created_at'];
}

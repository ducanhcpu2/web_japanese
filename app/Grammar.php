<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grammar extends Model
{
    protected $table = 'grammar';

    protected $fillable = ['id_gra', 'content'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';
    protected $fillable = ['title',  'description', 'from_time', 'to_time', 'icon'];
}

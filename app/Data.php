<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected  $fillable = ['name1' , 'name2' , 'name3'];
    public $timestamps = false;
}

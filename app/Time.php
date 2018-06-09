<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
     protected $table = 'times';
    protected $fillable = ['start_time', 'end_time'];
    protected $primaryKey = 'time_id';
    public $timestamps = false;
}

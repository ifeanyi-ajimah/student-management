<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    protected $table = 'myclasses';
    protected $primarykey = 'myclass_id';
    protected $fillable = ['academic_id','program_id', 'level_id', 'shift_id', 'time_id', 'group_id', 'batch_id', 'start_date', 'end_date', 'active'];
    public $timestamps = false;

}

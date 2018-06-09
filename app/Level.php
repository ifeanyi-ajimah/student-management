<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table ='levels';
    protected $fillable =['level', 'description'];
    protected $primaryKey = 'level_id';
    public $timestamps = false;

    public function programs()
    {
    	return $this->belongsTo('App\Program');
    }
}

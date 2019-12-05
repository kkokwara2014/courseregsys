<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['title','code'];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['title','code','creditload','semester_id','acadsession','department_id'];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function semester(){
        return $this->belongsTo(Semester::class);
    }
}

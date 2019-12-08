<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_reg extends Model
{
    protected $fillable=['user_id','course_id'];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function course(){
        return $this->hasMany(Course::class);
    }
}

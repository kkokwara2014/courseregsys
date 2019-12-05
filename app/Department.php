<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=['name','code'];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function course(){
        return $this->hasMany(Course::class);
    }
}

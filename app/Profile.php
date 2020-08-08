<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'students';
    protected $fillable = ['student_name','student_id','email','student_dept','student_lt','batch'];
}

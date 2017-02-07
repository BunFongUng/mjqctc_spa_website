<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "Courses";

    protected $fillable = [
        'course_name',
        'pro_id'
    ];
}

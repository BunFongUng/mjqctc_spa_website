<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "Subjects";

    protected $fillable = [
        'course_id',
        'sub_name',
        'price',
        'desc'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = "Program";

    protected $fillable = [
        'pro_name',
        'pro_code',
    ];
}

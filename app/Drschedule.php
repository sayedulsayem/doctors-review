<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drschedule extends Model
{
    protected $fillable = [
        'user_id',
        'chamber',
        'starting_date',
        'ending_date',
        'staring_time',
        'ending_time',
        'total_appointment',
        'house_no',
        'road',
        'dist',
        'sub_dist',
        'zip_code',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSetting extends Model
{
    protected  $table = "time_setting";
    protected $fillable = ['time_start' , 'time_end' , 'time_step', 'limit_order'];
    use HasFactory;
}

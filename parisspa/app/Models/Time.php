<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = 'time';
    protected $primaryKey = 'id_time';

    public function book()
    {
        return $this->belongsTo(Booking::class);
    }
}

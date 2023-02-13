<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = 'personnel';
    protected $primaryKey = 'id_personnel';

    public function book()
    {
        return $this->belongsTo(Booking::class);
    }
}

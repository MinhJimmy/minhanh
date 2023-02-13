<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    protected $table = 'spa';
    protected $primaryKey = 'id_spa';

    public function book()
    {
        return $this->belongsTo(Booking::class);
    }
}

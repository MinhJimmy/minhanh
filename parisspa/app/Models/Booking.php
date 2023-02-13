<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $timestamps = false;
    protected $table = 'book';
    protected $primaryKey = 'id_book';
    protected $fillable = ["phone",'name','time' ,'id_room','id_spa', 'id_user','status','code','updated'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
    public function spa()
    {
        return $this->hasOne(Spa::class, 'id_spa', 'id_spa');
    }
    public function time()
    {
        return $this->hasOne(Time::class, 'id_time', 'id_time');
    }
    public function room()
    {
        return $this->hasOne(Room::class, 'id_room', 'id_room');
    }
}

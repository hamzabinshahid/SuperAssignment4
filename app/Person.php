<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function room()
    {
        return $this->belongsTo('\App\Room');
    }
    protected $fillable = ['name','phone','dob','cnic','city','institute','room_id'];
}

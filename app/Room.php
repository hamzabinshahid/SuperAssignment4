<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function person()
    {
        return $this->hasMany('\App\Person');
    }
    protected $fillable = ['name', 'capacity', 'states', 'hasac'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hospital extends Model
{
    protected $table = "hospitals";
    public function registrations(){
        return $this->hasMany(Registration::class);
    }
}

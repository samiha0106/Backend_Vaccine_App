<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table="registrations";

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonias extends Model
{
    protected $fillable=['nombre_col','estados_id'];


    public function estado()
    {
        return $this->belongsTo('App\Estados');
    }

}

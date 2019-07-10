<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $fillable=['nombre'];


    public function colonias()
    {
        return $this->hasMany('App\Colonias');
    }

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }
}

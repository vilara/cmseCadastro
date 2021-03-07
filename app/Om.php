<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Om extends Model
{
    protected $fillable = ['nomeOm','siglaOm','codom','codug'];

    public $timestamps = false;

    public function sections()
    {
        return $this->belongsToMany('App\Section');
    }
}

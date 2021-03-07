<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['nomeSecao','siglaSecao'];

    public $timestamps = false;

    public function oms()
    {
        return $this->belongsToMany('App\Om');
    }

}

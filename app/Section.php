<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    protected $connection = 'mysql';

    protected $fillable = ['nomeSecao','siglaSecao'];

    public $timestamps = false;

    public function oms()
    {
        return $this->belongsToMany('App\Om');
    }

    public function details(){
        return $this->hasOne('App\Detail', 'detail_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Militar extends Model
{
    protected $fillable = ['postograd_id','situacao','nome_guerra','forca_id'];
    protected $table = 'militares';

    public function postograds()
    {
        return $this->belongsTo('App\Postograd', 'postograd_id', 'id');
    }

    public function forcas()
    {
        return $this->belongsTo('App\Forca', 'forca_id', 'id');
    }

    public function detail(){
        return $this->morphOne('App\Detail', 'detailable');
    }
}

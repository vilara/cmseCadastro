<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postograd extends Model
{
    protected $fillable = ['nomePg','siglaPg','ordemPg','circuloPg'];

    public $timestamps = false;

    public function militares()
    {
        return $this->hasMany('App\Militar');
    }

    public function details(){
        return $this->hasManyThrough(
            'App\Detail',
            'App\Militar',
            'postograd_id',
            'detailable_id',
            'id',
            'id'
        );
    }
}

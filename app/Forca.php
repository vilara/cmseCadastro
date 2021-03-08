<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forca extends Model
{
    protected $fillable = ['abrev','nome'];

    public $timestamps = false;

    public function militares(){
            return $this->hasMany('App\Militar');
    }
}

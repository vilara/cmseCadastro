<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['nomeCg', 'siglaCg'];

    public function details(){
        return $this->hasOne('App\Detail', 'detail_id');
    }
}

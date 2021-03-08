<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civil extends Model
{
    protected $fillable = ['primeiro_nome'];
    protected $table = 'civis';

    public function detail(){
        return $this->morphOne('App\Detail', 'detailable');
    }
}

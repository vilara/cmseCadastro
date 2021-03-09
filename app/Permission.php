<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $connection = 'mysql';

    protected $fillable = [
        'name', 'label'
    ];

    public function rolers(){
        return $this->belongsToMany('App\Roler')->withPivot('permission_id', 'roler_id');
    }
}

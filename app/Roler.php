<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roler extends Model
{

    protected $connection = 'mysql';

    protected $fillable = [
        'name', 'label'
    ];

    public function permissions(){
        return $this->belongsToMany('App\Permission', 'permission_roler', 'roler_id', 'permission_id')->withPivot('roler_id', 'permission_id');
    }

    public function users(){
        return $this->belongsToMany('App\User', env('DB_DATABASE').'.roler_user', 'roler_id', 'user_id');
    }
}

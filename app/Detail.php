<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'militar' => 'App\Militar',
    'civil' => 'App\Civil'
]);

class Detail extends Model
{

    protected $keyType = 'string';

    protected $connection = 'mysql';

    protected $fillable = ['user_id', 'idt', 'sexo', 'om_id', 'cargo_id', 'dtNasc', 'detailable_id', 'detailable_type'];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function oms()
    {
        return $this->belongsTo('App\Om', 'om_id', 'id');
    }

    public function cargos()
    {
        return $this->belongsTo('App\Cargo', 'cargo_id', 'id');
    }

    public function sections()
    {
        return $this->belongsTo('App\Section', 'section_id', 'id');
    }

    public function detailable(){
        return $this->morphTo();
    }


}

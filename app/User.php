<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Webpatser\Uuid\Uuid;

class User extends Authenticatable
{
    use Notifiable;

    protected $connection = 'mysql2';


    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'uuid', 'active', 'cpf'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function detail(){
        return $this->hasOne('App\Detail')->with('detailable');
    }

    public function oms(){
        return $this->hasManyThrough(
            'App\Om',
            'App\Detail',
            'om_id',
            'id',
        );
    }

    public function sections(){
        return $this->hasManyThrough(
            'App\Section',
            'App\Detail',
            'section_id',
            'id',
        );
    }

    public function permissions(){
        return $this->hasManyThrough(
            'App\Permission',
            'App\Roler'
        );
    }

    public function rolers(){
        return $this->BelongsToMany('App\Roler', 'roler_user', 'user_id', 'roler_id')->withPivot('user_id','roler_id');
    }
}

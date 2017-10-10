<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'id_card',
        'status',
        'access_room',
        'type_user_id',
        'department_id',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['delete_at'];

    public function department(){
        return $this->belongsTo('App\Department')->first();
    }
    public function type_user(){
        return $this->belongsTo('App\Type')->first();
    }

    public function fullName(){
        return "$this->first_name  $this->middle_name $this->last_name";
    }

    public function lastAccess(){
        if (is_null($this->hasMany('App\Access')->latest()->first())){
            return null;
        }
        return $this->hasMany('App\Access')->latest()->first()->created_at;
    }

    public function access(){
        return $this->hasMany('App\Access');
    }

    public function totalAccess(){
        return $this->hasMany('App\Access')->count();
    }

}

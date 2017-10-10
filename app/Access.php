<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'access';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public static function addNewAccess($user_id){
        $access = new Access();
        $access->status = 1;
        $access->description = "OK";
        $access->user_id = $user_id;
        $access->save();
    }
}

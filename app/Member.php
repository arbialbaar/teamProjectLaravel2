<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    public function status(){
        return $this->hasOne('App\status', 'member_id', 'id');
    }
}

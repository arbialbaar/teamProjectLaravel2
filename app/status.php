<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $guarded = [];

    public function Member(){
        return $this->belongsTo('App\Member', 'member_id', 'id');
    }
}

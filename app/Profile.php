<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'avatar', 'user_id', 'about', 'facebook' , 'youtube' , 'twitter'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}

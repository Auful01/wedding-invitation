<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Greetings extends Model
{
    //

    protected $table = 'greetings';
    protected $fillable = ['guest_id', 'message'];

    public function guest()
    {
        return $this->belongsTo('App\Models\Guest', 'guest_id');
    }

}

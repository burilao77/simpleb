<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = 
    [
        'username',
        'comentario',
    ];

    public function post()
    {
        return $this->belongsTo('App/Post');
    }
}

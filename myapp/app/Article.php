<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [

        'title',
        'body'
        
    ];

public function user(){

    $this->belongsTo('App\User');
}

}

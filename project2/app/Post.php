<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use SoftDeletes;
  // protected $table = 'posts';//
  protected $dates = ['deleted_at'];

  protected $fillable = [

    'title', 'content'
  ];
  
  
  public function user(){

    return $this->belongsTo('App\user');

  }

  public function photos(){

    return $this->morphMany('App\Photo', 'imageable');
  }

  public function tags(){

    return $this->morphToMany('App\Tag','taggable');

  }
}




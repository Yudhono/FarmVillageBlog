<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
    protected $table = 'post_tag';

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function posts()
    {
    	return $this->belongsToMany('App\Post');
    }
}

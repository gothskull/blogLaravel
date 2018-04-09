<?php

namespace App;

// use App\Categoria;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    public function category()
    {
    	return $this->belongsTo('App\Categoria');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}

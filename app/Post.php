<?php

namespace App;

// use App\Categoria;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];
    protected $dates = ['published_at'];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function category()
    {
    	return $this->belongsTo('App\Categoria');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function scopePublished($query)
    {
        $query->whereNotNull('published_at') 
              ->where('published_at','<=',Carbon::now())
              ->latest('published_at');

    }
}

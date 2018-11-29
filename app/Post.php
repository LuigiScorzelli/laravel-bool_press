<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'content', 'author_id', 'category_id', 'slug'];
    public function author(){

        return $this->belongsTo('App\Author');
    }

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function comments(){

        return $this->hasMany('App\Comment');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['first_name', 'last_name', 'description'];

    public function posts(){

        return $this->hasMany('App\Post');
    }

    public function fullname(){

        return $this->first_name. " " .$this->last_name;
    }
}

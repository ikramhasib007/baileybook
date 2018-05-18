<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    public function test_posts() {
        return $this->hasMany('App\TestPost');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }
}

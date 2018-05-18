<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestPost extends Model
{
    protected $table = 'test_posts';

    public function category() {
    	return $this->belongsTo('App\Category');
    }
}

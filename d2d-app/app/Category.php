<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function childs(){
    	return $this->belongsTo('App\Category','id','menu_levels');
    }
}

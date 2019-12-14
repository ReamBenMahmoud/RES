<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Meal()
    {
        return $this->hasMany('App\Meal');
    }
}

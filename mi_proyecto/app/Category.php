<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name']; 

    public function articles(){
    	return $this->hasMeny('App\Article', 'id_article', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use Sluggable;
    protected $table = "articles";
    protected $fillable = ['title', 'content', 'id_category', 'id_user'];

    public function category(){
    	return $this->belongsTo('App\Category', 'id_category', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function images(){
    	return $this->hasMany('App\Image');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag', 'article_tag', 'id_article', 'id_tag')->withTimestamps();	
    }

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

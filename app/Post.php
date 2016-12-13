<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable= ['title', 'slug', 'content', 'online', 'category_id', 'tags_list'];

    public function scopePublished($query){
    	return $query->where('online', true)->where('created_at', '<', DB::raw('NOW()'));
    }

    public function scopeSearchByTitle($query, $q){
    	return $query->where('title', 'LIKE', '%'.$q.'%');
    }

    public function getTitleAttribute($value){
    	return $value;
    }

    public function setSlugAttribute($value){
    	if(empty($value)){
    		$this->attributes['slug'] = Str::slug($this->title);
    	}
    }

    public function getDates(){
    	return ['created_at', 'updated_at', 'published_at'];
    }

    /* Override la key des routes : id par défaut
    public function getRouteKey(){
    	return $this->slug;
    }
    */

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }

    public function getTagsListAttribute(){
    	if($this->id){
    		return $this->tags->pluck('id');
    	}
    	
    }

    public function setTagsListAttribute($value){
    	$this->tags()->sync($value);
    }
}

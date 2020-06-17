<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;
class Photo extends Model
{
    public function category(){
    	return $this->belongsTo("App\Category","category_id","id");
    }
    public function tag(){
    	return $this->belongsToMany("App\Tag","taggable","photo_id","tag_id");
    }
}

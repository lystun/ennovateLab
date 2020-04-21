<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
        'name', 'slug'
    ];

    public function posts () {
        return $this->hasMany(Post::class);
    }
    
    public function getRouteKeyName(){
        return 'slug';
    }

    public function getNameAttribute($value){
        return ucfirst($value);
    }
}

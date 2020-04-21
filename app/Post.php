<?php

namespace App;

use App\User;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    
    public $fillable = [
        'title', 'article', 'slug', 'user', 'category_id', 'photo' 
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    protected $dates = ['deleted_at'];


    public function getRouteKeyName(){
        return 'slug';
    }

    public function getPathAttribute(){
        return $this->slug;
    }

    public function getTitleAttribute($value){
        return ucfirst($value);
    }
}

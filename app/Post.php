<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        // return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }

    public static function postSearch($keyword){
        return Post::where("title", "LIKE", "%$keyword%");
    }
}

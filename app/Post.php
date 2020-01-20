<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{ 

    use SoftDeletes;

    protected $date=['deleted_at'];
   
    protected $fillable=['title','content'];

    public function user(){

        return $this->belongsTo(User::class);

    } 
    public function photos(){

        return $this->morphToMany(Photo::class,'imagable');
    }
}

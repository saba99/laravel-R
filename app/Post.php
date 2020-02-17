<?php

namespace App;

use App\Rules\Uppercase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{ 

    use SoftDeletes;

    protected $date=['deleted_at'];
   
    protected $fillable=['title','content'];

   public $directory='/images/';

    public function user(){

        return $this->belongsTo(User::class);

    } 
    public function photos(){

        return $this->morphToMany(Photo::class,'imagable');
    }

    public function getPathAttribute($value){

       // retuen $this->directory . $value;
    } 
   //accessor
    public function getTitleAttribute($value)
    {
        return strrev($value);
    }

    //mutator 

   public function setTitleAttribute($value) {

    $this->attributes['title']=strtolower($value);
   }
}

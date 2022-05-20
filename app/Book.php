<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    protected $fillable = ['name', 'publisher'];

    public function author()
    {
        return $this->hasManyThrough(
            '\App\Author',
            '\App\BookAuthor',
            'book_id',
            'id',
            'id',
            'author_id'
        );
    }


   public function books(){
return $this->belongsToMany('App\Author');
    }


}

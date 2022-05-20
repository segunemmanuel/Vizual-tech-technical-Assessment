<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable=['name'];
    protected $hidden=[
        'laravel_through_key',
        'updated_at'
    ];



}

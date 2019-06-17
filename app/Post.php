<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['id','user_id','image','heading','title','description','status'];
    public $timestamps = true;
}

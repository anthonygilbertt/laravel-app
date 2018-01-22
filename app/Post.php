<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //   Table name
    protected $table = 'posts';
    //  Primary Key
    public $primaryKey = 'id';
    //   Timestamps   can be set to false if you do not want to include
    public $timestamps = true;

}

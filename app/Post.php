<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name is by default posts
    protected $table = 'posts';
    // primary key
    public $primaryKey = 'id';
    // timestamps is true by default
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }

}

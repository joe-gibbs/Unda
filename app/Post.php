<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'hash', 'length', 'description'
    ];

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}

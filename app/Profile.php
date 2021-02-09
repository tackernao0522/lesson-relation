<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable =
    [
        'user_id',
        'github_url',
        'twitter_url',
        'website_url',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

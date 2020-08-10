<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function timeLine()
    {
        $followers = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $followers)
            ->orwhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(99);
    }

    public function falsee()
    {
        $array = array();
        return $array;
    }

    public function getAvatarAttribute($value)
    {
        return asset($value ?: "https://i.pravatar.cc/200?u=" . $this->email);
    }

    public function path($append = '')
    {
        $path =  route('profile.show', $this->userName);

        return $append ? "{$path}/{$append}" : $path;
    }
}

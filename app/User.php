<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Определяем, что User имеет много post
    // Благодаря этому можно использовать конструкции:
    // {{$post->user->name}} в posts/index.blade.php и posts/show.blade.php
    // return view('dashboard')->with('posts', _$user->posts_); в DashboardController
    public function posts(){
        return $this->hasMany('App\Post');
    }
}

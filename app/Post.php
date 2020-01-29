<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Перезаписываем кое-какие родительского класса. Просто понимаем, что мы можем это сделать:)
    // Table name
    protected $table = 'posts'; // Иначе будет "Post" по имени класса (вроде бы)
    // Primary key
    protected $primarykey = 'id'; // тут и так id
    
    // Этот метод определяет, что Post имеет отношения с user
    // и что Post пренадлежит user
    // Благодаря этому можно использовать конструкции:
    // {{$post->user->name}} в posts/index.blade.php и posts/show.blade.php
    // return view('dashboard')->with('posts', _$user->posts_); в DashboardController
    public function user(){
        return $this->belongsTo('App\User');
    }
}

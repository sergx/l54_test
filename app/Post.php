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
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = [
     //保存できる値を定義できる
     'title',
     'body',
    ];
    
 public function getPaginateByLimit(int $limit_count = 5)
 {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    
 }
}

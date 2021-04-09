<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;//自分以外のクラスの中でuseしなかでもuseする
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

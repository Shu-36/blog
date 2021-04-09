<?php
namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{  
  //$post=new Post();のような感じ
    public function index(Post $post)
 {
    return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
 }

    public function show(Post $post)
  {
      return view('show')->with(['post' => $post]);
  }
  public function create()
  {
      return view('create');
  }
 public function store(Post $post, PostRequest $request)
 {
    //postの配列事態を取り出す
     $input = $request['post'];
     //postインスタンスにインサート構文を利用している？
      $post->fill($input)->save();
      //idを取得して記事詳細画面に遷移させる
     return redirect('/posts/' . $post->id);
 }
 public function edit(Post $post){
     return view('edit')->with(['post' => $post]);
 }
 public function update(PostRequest $request, Post $post)
 {
   $input = $request['post'];
   $post->fill($input)->save();
   
   return redirect('/posts/' . $post->id);
 }
 public function destroy(Post $post){
     $post->delete();
     return redirect('/');
 }
}

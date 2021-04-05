<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
       <h1>編集画面</h1>
       <form action="/posts/{{$post->id}}" method="POST">
          {{ csrf_field() }}
          @method('PUT')
         <div class="content__title">
              <h2>タイトル</h2>
              <input type='text' name='post[title]' value='{{ $post->title }}'><br>
         </div>
         <div class="content__body">
             <h2>本文</h2>
            <textarea type='text' name='post[body]'>{{ $post->body }}</textarea>
         </div>
          <input type="submit" value="update">
       </form>
       <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
     </body>
</html>
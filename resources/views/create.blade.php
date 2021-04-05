<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
       <h1>Blog Name</h1>
       <form action="/posts" method="POST">
          {{ csrf_field() }}
         <div class="title">
              <h2>Title</h2>
              <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/><br>
              <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
         </div>
         <div class="body">
             <h2>Body</h2>
             <textarea name="post[body]" placeholder="今日も一日お疲れさまでした"></textarea><br>
              <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
         </div>
          <input type="submit" name="store"/>
       </form>
           
        <div class="back">[<a href="/">戻る</a>]</div>
     </body>
</html>
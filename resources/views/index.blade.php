<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       <h1>BlogName</h1>
        <div class = 'posts'>
            @foreach ($posts as $post)
            <div class = 'post'>
                <h2 class = 'title'>{{ $post->title }}</h2>
                <p class = 'body'>{{ $post->body }}</p>

                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>

            </div>
            @endforeach
        </div>
         <div class ='paginate'>
            {{ $posts->links() }}   
         <div>
     </body>

</html>


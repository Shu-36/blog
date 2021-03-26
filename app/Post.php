<?php

namespace App\Http\Controllers;

use App/Post;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->get()]);  
    }
}
?>

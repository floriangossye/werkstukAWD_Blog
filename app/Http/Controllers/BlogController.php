<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
        // get post from DB from slug url
        $post= Post::where('slug','=',$slug)->first();

        //return the view with the slug url
        return view('blog.single')->withPost($post);
    }
}

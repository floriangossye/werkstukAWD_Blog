<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        $first = 'Florian';
        $last = 'Gossye';
        $full = $first . " " . $last;
        $email = 'florian_gossye@hotmaail.com';
        $data = [];
        $data['email'] = $email;
        $data['full'] = $full;

        return view('pages.about')->withData($data);
    }

    public function getPost()
    {
        return view('pages.post');
    }

    public function postContact()
    {

    }
}
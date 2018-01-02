<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Mail;
use Session;

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
        $email = 'florian_gossye@hotmail.com';
        $data = [];
        $data['email'] = $email;
        $data['full'] = $full;

        return view('pages.about')->withData($data);
    }

    public function getPost()
    {
        return view('pages.post');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject'=>$request->subject,
            'bodyMessage'=>$request->message
        );
        Mail::send('emails.about',$data,function($message) use ($data){
            $message->from($data['email']);
            $message->to('hello@awd.io');
            $message->subject($data['subject']);

        });
        Session::flash('success', 'your email has been sent');

        return redirect('/');


    }
}
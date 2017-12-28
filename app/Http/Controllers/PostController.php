<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);                                        //all the blog posts variable
        return view('posts.index')->withPosts($posts);          //placing posts into the view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //function to validate data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'

        ));
        //Saving to DB
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();
        Session::flash('success','post succesfully saves!');
        //Redirecting
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);   //find post by id
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(           //validate the updated data
            'title' => 'required|max:255',
            'body' => 'required'

        ));
        $post = Post::find($id);                     //search for the post from DB
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();                               //Saves post to DB

        Session::flash('success', 'This post was succesfully saved');   //flash message onsave

        return redirect()->route('posts.show',$post->id);        //redirecting to showing updated post

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'This post was succesfully deleted');
        return redirect()->route('posts.index');
    }
}

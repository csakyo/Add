<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index() {
      //$posts = Post::all();
      $posts = Post::latest()->get();
      //dd($posts->toArray());
      return view('posts.index', ['posts' => $posts]);
    }


    public function show($id){
    $post = Post::findOrFail($id);
    return view('posts.show')->with('post', $post);


    }

    public function create(){
      return view('posts.create');
    }


    public function store(Request $request) {
      $this->validate($request, [
        'title' => 'required|min:3',
        'body' => 'required'
        // 'Address' => 'required'
        // 'Tel' => 'required'
        // 'Website' => 'required'


      ]);

      $post = new Post();
      $post->title = $request->title;
      $post->body = $request->body;
      $post->Address = $request->Address;
      $post->Tel = $request->Tel;
      $post->Website = $request->Website;
      $post->save();
      return redirect('/');
    }


    public function edit(Post $post){
     return view('posts.edit')->with('post', $post);


    }

    public function update(Request $request, Post $post) {
      $this->validate($request, [
        'title' => 'required|min:3',
        'body' => 'required'
        // 'Address' => 'required'
        // 'Tel' => 'required'
        // 'Website' => 'required'


      ]);

      $post->title = $request->title;
      $post->body = $request->body;
      $post->Address = $request->Address;
      $post->Tel = $request->Tel;
      $post->Website = $request->Website;
      $post->save();
      return redirect('/');
    }


}

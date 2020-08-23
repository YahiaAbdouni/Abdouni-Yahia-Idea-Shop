<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class UserPostsController extends Controller
{
    public function index(){
        return view('user.post.index')->with('posts', Post::orderBy('id', 'DESC')->get())->with('categories', Category::all());
    }

    public function create(){
        return view('user.post.create')->with('categories', Category::all());
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content, 
            'user_id' => auth()->id(),
            'category_id' => $request->category_id
        ]);

        return redirect('user/post')->with('success', 'Post created');
    }

    public function show($id){
        $post = Post::find($id);
        return view('user.post.show')->with('post', $post)->with('categories', Category::all());
    }

    public function edit($id){
        $post = Post::find($id);
        return view('user.post.edit')->with('post', $post)->with('categories', Category::all());
    }

    public function update(Request $request, Post $post){
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id
            ]);
        return redirect('home')->with('success', 'Post updated');
    }

    public function destroy($id){
        $post = Post::find($id);

        $post->delete();
        
        return back()->with('success', 'Post deleted');
    }
}

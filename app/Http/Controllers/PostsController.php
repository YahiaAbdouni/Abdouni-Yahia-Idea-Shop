<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('admin.posts.index')->with('posts', Post::orderBy('id', 'DESC')->get())->with('categories', Category::all());
    }

    public function create(){
        return view('admin.posts.create')->with('categories', Category::all());
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

        return redirect('admin/posts')->with('success', 'Post created');
    }

    public function show($id){
        $post = Post::find($id);
        return view('admin.posts.show')->with('post', $post);
    }

    public function edit($id){
        $post = Post::find($id);
        return view('admin.posts.edit')->with('post', $post)->with('categories', Category::all());
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

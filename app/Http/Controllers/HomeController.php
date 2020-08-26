<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $postCount = Post::all()->count();
        $categoryCount = Category::all()->count();
        $userCount = User::all()->count();
        return view('home')->with('posts', Post::orderBy('id', 'DESC')->get())->with('categories', Category::all())->with('postCount', $postCount)->with('categoryCount', $categoryCount)->with('userCount', $userCount);
    }

    public function welcome()
    {
        return view('welcome')->with('posts', Post::orderBy('id', 'DESC')->get())->with('categories', Category::all());
    }

    public function post(Post $post)
    {
        return view('user.post')->with('post', $post)->with('categories', Category::all());
    }

    public function category(Category $category)
    {
        return view('user.CatShow')->with('category', $category)->with('categories', Category::all());
    }

    public function user(User $user)
    {
        return view('user.profile')->with('user', $user)->with('posts', Post::orderBy('id', 'DESC')->get())->with('categories', Category::all());
    }

    public function editUser($id){
        $user = User::find($id);
        return view('user.edit')->with('user', $user)->with('categories', Category::all());
    }

    public function update(Request $request, User $user){
        $user->update([
            'name' => $request->name,
            'email' => $request->email
            ]);
        return view('user.profile')->with('user', $user)->with('posts', Post::orderBy('id', 'DESC')->get())->with('categories', Category::all());
    }
}

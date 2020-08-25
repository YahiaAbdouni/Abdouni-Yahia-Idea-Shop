<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('admin.users.index')->with('users', User::orderBy('id', 'DESC')->get())->with('posts', Post::all())->with('categories', Category::all());
    }

    public function show($id){
        $user = User::find($id);
        return view('admin.users.show')->with('user', $user);
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, User $user){

        $user->update([
            'name' => $request->name,
            'email' => $request->email
            ]);
        return back()->with('user', $user)->with('success', 'Profile updated');
    } 

    public function destroy($id){
        $user = User::find($id);

        $user->delete();
        
        return back()->with('success', 'User deleted');
    }
}

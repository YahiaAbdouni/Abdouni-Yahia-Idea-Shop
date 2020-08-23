<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class UserCategoriesController extends Controller
{
    public function index(){
        return view('user.category.index')->with('categories', Category::orderBy('id', 'DESC')->get())->with('posts', Post::all());
    }

    public function create(){
        return view('user.category.create')->with('categories', Category::all());
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect('user/category')->with('success', 'Category created');
    }

    public function show(Category $category){
        return view('user.category.show')->with('category', $category)->with('categories', Category::all());
    }

    public function edit($id){
        $category = Category::find($id);
        return view('user.category.edit')->with('category', $category)->with('categories', Category::all());
    }

    public function update(Request $request, Category $category){
        $category->update(['name' => $request->name]);
        return redirect('user/category')->with('success', 'Category created');
    }

    public function destroy($id){
        $category = Category::find($id);

        $category->delete();
        
        return redirect('user/category')->with('success', 'Category deleted');
    }
}

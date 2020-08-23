<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('admin.categories.index')->with('categories', Category::orderBy('id', 'DESC')->get())->with('posts', Post::all());
    }

    public function create(){
        return view('admin.categories.create')->with('categories', Category::all());
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect('admin/categories')->with('success', 'Category created');
    }

    public function show(Category $category){
        return view('admin.categories.show')->with('category', $category)->with('categories', Category::all());
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category)->with('categories', Category::all());
    }

    public function update(Request $request, Category $category){
        $category->update(['name' => $request->name]);
        return redirect('admin/categories')->with('success', 'Category created');
    }

    public function destroy($id){
        $category = Category::find($id);

        $category->delete();
        
        return redirect('admin/categories')->with('success', 'Category deleted');
    }
}

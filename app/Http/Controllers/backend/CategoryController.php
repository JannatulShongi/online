<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('backend.category.create');
    }
    public function store(Request $request){
        $category = new Category();
        $category->name=$request->name;
        $category->image=$request->image;
        $category->description=$request->description;
        $category->save();
        return redirect()->back()->with('message','category added successfully');
    }
    public function list(){
        $category=Category::all();
        return view('backend.category.list',compact('category'));
    }
}

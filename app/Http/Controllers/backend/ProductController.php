<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        $category=Category::all();
        return view ('backend.product.create',compact('category'));
    }
    public function store(Request $request){

        $product = new Product();
        $product->name=$request->name;
        $product->category_id=$request->category_id;
        $product->price=$request->price;
        $product->colour=$request->colour;
        $product->details=$request->details;
        $product->image=$request->image;
        //dd($product);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('upload/', $filename);
            $product->image = $filename;
        }
        
        $product->save();
        return redirect()->back()->with('message','product added successfully');

    }
    public function list(){
        $product=Product::with('category')->get();
        return view('backend.product.list',compact('product'));
    }
}

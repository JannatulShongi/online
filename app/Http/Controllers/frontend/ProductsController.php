<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(){
        $product=Product::all();
        return view('frontend.product.view',compact('product'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(){
        $products =Product::all();
        return response()->json($products);
    }

    public function getCategories(){
        $categories =Category::all();
        return response()->json($categories);
    }

    public function cateProd($id){
        $category = Category::find($id);
        return response()->json($category->products);
    }

}

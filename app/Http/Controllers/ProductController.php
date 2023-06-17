<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\brand;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::with('category')->get( );
        return view('product.index', compact('products'));
    }


    public function create(){
        $categories = category::all();
        $brands = brand::all();
        return view('product.create', compact('brands','categories'));
    }

    public function store(Request $request){
        $product = product::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brands,
            'rating' => $request->rating

        ]);

        return redirect()->route('product.index');
    }


}


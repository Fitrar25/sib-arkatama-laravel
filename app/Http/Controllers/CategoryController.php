<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();

        return view('category.index', compact('categories'));

    }

    public function create(){
        return view('category.create');
    }
    //input data
    public function store(Request $request){
        $category = Category::create([
            'name' => $request->name
        ]);

        //back to index

    return redirect()->route('category.index');
    }
}

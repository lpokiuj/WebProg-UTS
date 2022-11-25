<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id)
    {
        $data = Category::find($id)->load('books');
        return view('category')->with('category', $data);
    }
}

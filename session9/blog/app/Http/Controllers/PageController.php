<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();        
        return view('index')->with('categories',$categories);
    }
    
}

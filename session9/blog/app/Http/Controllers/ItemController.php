<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class ItemController extends Controller
{
    //
    public function show($id)
    {
        $item=Item::findOrFail($id);        
        return view('items.show')->with('item',$item);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;

class TshirtController extends Controller
{
    public function showAll()
    {
    	$allItems = items::where('catId', '=', 1)->get();
    	return view('products.Tshirt',compact('allItems'));
    }
}

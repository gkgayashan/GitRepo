<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;

class STShirts extends Controller
{
    public function showAll()
    {
    	$allItems = items::where('catId', '=', 2)->get();
    	return view('products.Tshirt',compact('allItems'));
    }

    public function addToCart()
    {
    	
    }
}

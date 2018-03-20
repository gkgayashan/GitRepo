<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;

class MainController extends Controller
{
    public function index()
    {
    	$newItems = items::where('newArrival', '=', 1)->get();
    	return view('index',compact('newItems'));
    }
}

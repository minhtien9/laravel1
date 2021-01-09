<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function contact()
	{
		return view ('ban-banh.contact');
	}
	public function about()
	{
		return view('ban-banh.about');
	}
	public function index()
	{
		// $slide = Slide::all();
		return view('ban-banh.index');
		// return view ('ban-banh.idex',compact('slide'));
	}
	
    
}

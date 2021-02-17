<?php namespace App\Controllers\frontend;

class HomeController extends BaseController
{
	public function index(){
		return view('frontend/home');
	}

	public function about(){
		return view('frontend/about');
	}

	public function contact(){
		return view('frontend/contact');
	}
	

	//--------------------------------------------------------------------

}

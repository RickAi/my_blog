<?php namespace App\Http\Controllers;

use App\Page;

class HomeController extends Controller {

	// home page
	public function index()
	{
		return view('home');
	}

	// blog page
	public function blog(){
		return view('blog')->withPages(Page::all());
	}

	// about me page
	public function me(){

	}

	// the book record page
	public function book(){

	}

	// the movie record page
	public function movie(){

	}

	// the fitness page
	public function fitness(){

	}

	// the project record page
	public function project(){

	}
}
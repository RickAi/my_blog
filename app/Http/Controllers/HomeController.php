<?php namespace App\Http\Controllers;

use App\Article;
use App\ArticleType;

class HomeController extends Controller {

	// home page
	public function index()
	{
		return view('home');
	}

	// blog page
	public function blog(){
		$articles = Article::all();
		$types = ArticleType::all();

		return view('blog', compact('articles', 'types'));
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
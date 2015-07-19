<?php namespace App\Http\Controllers;

use App\Article;
use App\ArticleType;
use Illuminate\Filesystem\Filesystem;
use ParsedownExtra;

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

		return view('homepage.blog', compact('articles', 'types'));
	}

	// about me page
	public function me(){
		$file_system = new Filesystem();
		$extra = new ParsedownExtra();
		$about_me_file = public_path()."/files/about_me.md";

		$about_me_content = $file_system->get($about_me_file);
		$about_me_content = $extra->text($about_me_content);

		return view('homepage.me', compact('about_me_content'));
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
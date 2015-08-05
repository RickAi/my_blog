<?php namespace App\Http\Controllers;

use App\Article;
use App\ArticleType;
use DateTime;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
use ParsedownExtra;

class HomeController extends Controller {

	// home page
	public function index()
	{
		return view('home');
	}

	// blog page
	public function blog(){
		// Get articles with pagination, 30 for each, ordered by the updated time
		$articles = DB::table('articles')->orderBy('updated_at', 'desc')->paginate(30);
		$types = ArticleType::all();


		// set article and article update time into a array
		$article_infos = array();
		$i = 0;
		foreach ($articles as $article) {
			$date_str = $article->updated_at;
			$date = explode(" ", $date_str);

			$article_infos[$i] = array();
			$article_infos[$i][0] = $article;
			$article_infos[$i][1] = $date[0];
			$i++;
		}

		return view('homepage.blog', compact('article_infos', 'types', 'articles'));
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
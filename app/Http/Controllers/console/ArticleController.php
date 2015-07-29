<?php namespace App\Http\Controllers\console;

use App\Article;
use App\ArticleType;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use DB;
use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$article = Article::paginate(20);

		return view('console.blog.article.index', compact('article'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::find($id);
		$article_types = ArticleType::all();
		$article_type_names = array();

		foreach($article_types as $article_type){
			$article_type_names[count($article_type_names)] = $article_type->name;
		}

		return view('console.blog.article.edit', compact('article', 'article_type_names'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ArticleRequest $request)
	{
		$article = Article::find($id);

		$article->title = $request->title;
		$article->body = $request->body;
		$article->save();

		return redirect()->route('console.article.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Article::destroy($id);

		return redirect()->route('console.article.index');
	}

}

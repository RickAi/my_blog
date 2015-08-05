<?php namespace App\Http\Controllers\console;

use App\Article;
use App\ArticleType;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
//		$article = DB::table('articles')->orderBy('updated_at', 'desc')->paginate(20);

		return view('console.blog.article.index', compact('article'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$type_tree = ArticleType::getTypeTree();
		return view('console.blog.article.create', compact('type_tree'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		$article = new Article();
		$article->body = $request->body;
		$article->title = $request->title;
		$article->article_type_id = $request->article_type_id;
		$article->updated_at = new DateTime();
		$article->created_at = $article->updated_at;
		$article->save();
		return redirect()->route('console.article.index');
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
		$type_tree = ArticleType::getTypeTree();

		return view('console.blog.article.edit', compact('article', 'type_tree'));
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
		$article->article_type_id = $request->article_type_id;
		$article->updated_at = new DateTime();
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

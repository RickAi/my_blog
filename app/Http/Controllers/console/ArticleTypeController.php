<?php namespace App\Http\Controllers\console;

use App\ArticleType;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleTypeRequest;
use Illuminate\Http\Request;
use Notification;

class ArticleTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$article_types = ArticleType::paginate(15);

		return view('console.blog.article_type.index', compact('article_types'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('console.blog.article_type.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleTypeRequest $request)
	{
		$article_type = new ArticleType();
		$article_type->name = $request->name;
		$article_type->save();

		Notification::success("添加成功");

		return redirect()->route('console.article_type.index');
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
		$article_type = ArticleType::find($id);
		return view('console.blog.article_type.edit', compact('article_type'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ArticleTypeRequest $request)
	{
		$article_type = ArticleType::find($id);
		$article_type->name = $request->name;
		$article_type->save();

		return redirect()->route('console.article_type.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ArticleType::destroy($id);

		return redirect()->route('console.article_type.index');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
//			$table->increments('id');
//			$table->timestamps();

			$table->increments('id');
			$table->string('title');
			$table->integer('article_type_id')->unsigned();
			$table->text('body')->nullable();
			$table->integer('user_id');
			$table->integer('view_numbers');
			$table->dateTime('created_at')->nullable();
			$table->dateTime('updated_at')->nullable();

			$table->foreign('article_type_id')
				->references('id')
				->on('article_types')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}

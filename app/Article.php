<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//

    public function article_type(){
        return $this->belongsTo('App\ArticleType');
    }

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model {

    public function articles(){
        return $this->hasMany('App\Article');
    }

    public static function getTypeTree(){
        $article_types = self::all();
        $type_tree = array();
        foreach ($article_types as $article_type) {
            $type_tree[$article_type->id] = $article_type->name;
        }
        return $type_tree;
    }

}

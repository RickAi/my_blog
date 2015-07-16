<?php
/**
 * Created by PhpStorm.
 * User: CIR
 * Date: 7/15/15
 * Time: 22:07
 */


use App\ArticleType;
use Illuminate\Database\Seeder;

class ArticleTypeSeeder extends Seeder {

    public function run(){
        DB::table('article_types')->delete();

        for($i = 0; $i < 5; $i++){
            ArticleType::create([
                'name' => "tag".$i,
            ]);
        }
    }

}
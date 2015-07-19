<?php
/**
 * Created by PhpStorm.
 * User: CIR
 * Date: 7/15/15
 * Time: 22:07
 */


use App\ArticleType;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

class ArticleTypeSeeder extends Seeder {

    public function run(){
        DB::table('article_types')->delete();

        $tag_array = array();
        $first_add = true;

        $dir = "/home/vagrant/projects/blogs";
        $file_system = new Filesystem();

        $files = $file_system->allFiles($dir);

        foreach($files as $file) {
            $file_extension = $file_system->extension($file);
            if ($file_extension != 'md') {
                continue;
            }

            $last_dir = dirname($file);
            $tag_name = preg_replace('/^.+[\\\\\\/]/', '', $last_dir);

            if ($first_add) {
                $tag_array[0] = $tag_name;
                $first_add = false;
            }

            $is_new = true;
            foreach ($tag_array as $tag) {
                if(strcmp($tag, $tag_name) == 0){
                    $is_new = false;
                }
            }

            if($is_new){
                $tag_count = count($tag_array);
                $tag_array[$tag_count] = $tag_name;
            }

        }

        foreach ($tag_array as $tag) {
            ArticleType::create([
                'name' => $tag,
            ]);
        }
    }

}
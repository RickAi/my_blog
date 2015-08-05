<?php
use App\Article;
use App\ArticleType;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

/**
 * Created by PhpStorm.
 * User: CIR
 * Date: 6/29/15
 * Time: 17:08
 */
class ArticleTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('articles')->delete();

        // 从数据库中获取的ArticleTag集合
        $tags = ArticleType::all();

        // 初始化博客的路径
        $dir = "/home/vagrant/projects/blogs";
        $file_system = new Filesystem();

        $files = $file_system->allFiles($dir);

        foreach($files as $file){
            $file_extension = $file_system->extension($file);
            if($file_extension != 'md'){
                continue;
            }

            $create_time_stamp = $file_system->lastModified($file);
            $create_time = gmdate("Y-m-d", $create_time_stamp);

            $file_content = $file_system->get($file);
            $file_name = preg_replace('/^.+[\\\\\\/]/', '', $file);
            $file_name = explode(".md", $file_name);
            $blog_name = $file_name[0];

            $last_dir = dirname($file);
            $current_tag_name = preg_replace('/^.+[\\\\\\/]/', '', $last_dir);

            $article_type_id = 0;

            foreach ($tags as $tag) {
                $tag_name = $tag->name;
                if(strcmp($current_tag_name, $tag_name) == 0){
                    $article_type_id = $tag->id;
                    break;
                }
            }

            Article::create([
                'title' => $blog_name,
                'article_type_id' => $article_type_id,
                'view_numbers' => 0,
                'body' => $file_content,
                'user_id' => 1,
                'created_at' => $create_time,
                'updated_at' => $create_time,
            ]);
        }
    }

}

<?php
use App\Article;
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

        $dir = "/home/vagrant/projects/blogs";
        $file_system = new Filesystem();

        $files = $file_system->allFiles($dir);

        foreach($files as $file){
            $file_extension = $file_system->extension($file);
            if($file_extension != 'md'){
                continue;
            }

            $file_content = $file_system->get($file);
            $file = preg_replace('/^.+[\\\\\\/]/', '', $file);
            $file = explode(".md", $file);
            $file = $file[0];

            $this->command->info($file);

//            if($file_title == ''){e
//                continue;
//            }

            Article::create([
                // 使用preg_replace解决不支持中文
                'title' => preg_replace('/^.+[\\\\\\/]/', '', $file),
                'slug' => 'blog',
                'body' => $file_content,
                'user_id' => 1,
            ]);
        }
    }



}

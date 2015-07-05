<?php
use App\Page;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

/**
 * Created by PhpStorm.
 * User: CIR
 * Date: 6/29/15
 * Time: 17:08
 */
class PageTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('pages')->delete();

        $dir = "/home/vagrant/projects/blogs";
        $file_system = new Filesystem();

        $files = $file_system->allFiles($dir);

        foreach($files as $file){
            $file_extension = $file_system->extension($file);
            if($file_extension != 'md'){
                continue;
            }

            $file_title = $file_system->name($file);
            $file_content = $file_system->get($file);

            if($file_title == ''){
                continue;
            }

            Page::create([
                'title' => $file_title,
                'slug' => 'blog',
                'body' => $file_content,
                'user_id' => 1,
            ]);
        }
    }



}
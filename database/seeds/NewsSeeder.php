<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++)
        {
            $news = new News;
            $news->title = "News number " . $i;
            $news->data = "Lorem ipsum" . str_repeat("lorem ipsum", 50) . ".";
            $news->save();
        }
    }
}

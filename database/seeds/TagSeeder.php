<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = ['classic', 'rock', 'rap', 'pop'];

        foreach($tags as $model){
            $tag = new Tag();
            $tag->name = $model;
            $tag->slug = Str::slung($tag->name);
            $tag->save();
        }


    }
}

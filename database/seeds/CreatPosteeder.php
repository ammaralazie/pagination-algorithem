<?php

use App\Post;
use Illuminate\Database\Seeder;

class CreatPosteeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'name'=>'ammar'
        ]);
        Post::create([
            'name'=>'ahmed'
        ]);
        Post::create([
            'name'=>'aessa'
        ]);
        Post::create([
            'name'=>'noor'
        ]);
        Post::create([
            'name'=>'hassan'
        ]);
        Post::create([
            'name'=>'muhesan'
        ]);
        Post::create([
            'name'=>'ali'
        ]);
        Post::create([
            'name'=>'ousma'
        ]);
        Post::create([
            'name'=>'hadee'
        ]);
        Post::create([
            'name'=>'frman'
        ]);
    }
}

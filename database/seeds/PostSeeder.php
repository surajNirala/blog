<?php

use App\Post;
use Illuminate\Database\Seeder;
use Mockery\Generator\factory;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Post::class, 500)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();
        
        /* to predetermine the a user's name for all the post during seeding */
        // $user = User::factory()->create([
        //     'name'=>'John Doe'
        // ]);
        User::factory()->create([
            'name'=>'John Doe'
        ]);

        

        Post::factory(5)->create();

        // Post::factory()->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);

        // $family = Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);

        // $work = Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title'=>'My Family Post',
        //     'slug'=>'my-family-post',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        //      Totam corporis incidunt dignissimos, expedita dolore soluta debitis eius quam
        //      qui reprehenderit ipsum itaque vel dolores ab saepe sed. Officia, eaque minus.'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title'=>'My Work Post',
        //     'slug'=>'my-work-post',
        //     'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        //      Totam corporis incidunt dignissimos, expedita dolore soluta debitis eius quam
        //      qui reprehenderit ipsum itaque vel dolores ab saepe sed. Officia, eaque minus.'
        // ]);
        
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

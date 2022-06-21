<?php

use Illuminate\Support\Facades\Route;

use \App\Models\Post;
use \App\Models\Category;
use \App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // $posts = collect(File::files(resource_path("posts")))
    //                 ->map(fn ($file)=> $document = YamlFrontMatter::parseFile($file))
    //                 ->map(fn ($document)=> new Post(
    //                         $document -> title,
    //                         $document -> slug,
    //                         $document -> date,
    //                         $document -> excerpt, 
    //                         $document -> body()
    //                       )
    //                 );

    
    // foreach( $files as $file ){
    //     $document = YamlFrontMatter::parseFile($file);

    //     $posts[] = new Post(
    //         $document -> title,
    //         $document -> slug,
    //         $document -> date,
    //         $document -> excerpt, 
    //         $document -> body()
    //     );
    // }



    // $documents[] = YamlFrontMatter::parseFile($files);
    // $files = File::files(resource_path("posts/"));

    // ddd($posts);
    // // $posts = Post::all();

    // \Illuminate\Support\Facades\DB::listen( function($query){
    //     logger($query->sql , $query->bindings);
    // });
    // with('category','author')->

    return view('posts', [
        'posts' => Post::latest()->get()
    ]);

});


Route::get('/posts/{post:slug}', function( Post $post){

    //Find a post by its slug and pass it to a view called "post"

    return  view('post',
    [
        // 'post'=> Post::find($slug)
        // 'post'=>file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html')
        'post'=> $post
        // 'post'=> Post::findOrFail($id)
    ]);

});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'posts'=> $category->posts
    ]);
});

// -> where('post','[A-z_\-]+');


Route::get('authors/{author:username}', function(User $author){
    return view('posts', [
        'posts'=>$author->posts
    ]);
});
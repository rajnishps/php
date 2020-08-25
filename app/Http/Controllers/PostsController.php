<?php


namespace App\Http\Controllers;
use DB;
use App\Post;
/*class PostsController
{
   public function show($post)
    {
        $posts = [
            'my-first-post' => 'hello its my first post',
            'my-second-post' => 'hello its my 2nd post'
        ];

        if (! array_key_exists($post, $posts)) {
            abort(404, 'sorry, the post was not found.');

        }


        return view('post', [
            'post'=> $posts[$post]
        ]);


    }
*/


class PostsController

{
    public function show($slug)
    {
  //      $post = DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', [
            'post' => $post

        ]);
    }
}


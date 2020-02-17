<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {

//        $post =DB::table('posts')->where('slug', $slug)->first();

        $post = Post::where('slug', $slug)->firstOrFail();

//            if(! $post){
//                abort(404);
//            }

//        $posts = [
//            'my-first-post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, earum.',
//            'my-second-post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid debitis eius rerum?
//        In ipsa quas sed?'
//        ];

//        if (! array_key_exists($post, $posts)) {
//            abort(404, 'Sorry, that post was not found.');
//        }
        return view('post', [
            'post' => $post
        ]);

    }
}

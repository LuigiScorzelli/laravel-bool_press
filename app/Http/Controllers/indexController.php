<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Comment;

class indexController extends Controller
{
    public function index(){

        $data = [
                'posts' => Post::where('is_active',1)->where('type','normal')->orderBy('created_at','desc')->take(6)->get(),
                'hot_post' => Post::where('is_active',1)->where('type','hot_post')->first(),
                'side_posts' =>  Post::where('is_active',1)->where('type','side_post')->get(),
                'categorys' => Category::all(),
        ];

        return view('layouts.page.index_home', $data);
    }

    public function post(Post $post){
        // dd($post);
        $data = [
            'post' => $post,
            'comments' => Comment::where('post_id', $post->id)->get(),
            'categorys' => Category::all(),
            'all_posts' => Post::where('author_id', $post->author_id)->get(),
        ];

        return view('layouts.page.post', $data);
    }
}

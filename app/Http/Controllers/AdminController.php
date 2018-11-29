<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Author;
use App\Category;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){

        return view('backoffice.posts_page.posts',['posts' => Post::all()]);
    }

    public function create(){

        $data = [
            'authors' => Author::all(),
            'categorys' => Category::all(),
        ];

        return view('backoffice.posts_page.create', $data);
    }

    public function save(Request $request, Post $post){

        $data = $request->all();

        if(empty($data['title']) || empty($data['content']))
        {
             return 'error';
        }
        $data['slug'] = str_slug($data['title']);

        $post = new Post();
        $post->fill($data);
        $post->save();

        return redirect()->route('admin.posts');
    }

    public function edit(Request $request, Post $post){

        if($request->isMethod('get')){
            return view('backoffice.posts_page.postEdit',['post' => $post]);
        }
        else{
            $data = $request->all();
            $post->fill($data);

            if($data['post_type'] == 'hot_post'){

                DB::table('posts')
                ->where('type', 'hot_post')
                ->update(['type' => 'normal']);

                $post->type = 'hot_post';
            }

            // if($data['post_type'] == 'side_post'){
            //     DB::table('posts')
            //     ->where('type', 'hot_post')
            //     ->first();
            //
            //     $post->type = 'side_post';
            // }


            $post->save();

            return redirect()->route('admin.posts');
        }

    }

    // delete post

    public function delete(Post $post){

        $allComments = Comment::where('post_id', $post->id)->delete();

        $post->delete();


        return redirect()->route('admin.posts');
    }
}

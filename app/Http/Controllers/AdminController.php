<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){

        return view('backoffice.posts_page.posts',['posts' => Post::all()]);
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
            //     ->where('type', 'side_post')
            //     ->update(['type' => 'normal']);
            //
            //     dd($data['post_type']);
            //     $post->type = 'side_post';
            // }


            $post->save();

            return redirect()->route('admin.posts');
        }


    }
}

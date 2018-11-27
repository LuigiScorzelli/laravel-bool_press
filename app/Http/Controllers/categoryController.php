<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class categoryController extends Controller
{
    public function index(Category $categorys){

        $data = [
            'categorys' => $categorys,
            'posts_category' => Post::where('category_id', $categorys->id)->get(),
            'all' => Category::all(),
        ];

        return view('layouts.page.category', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    public function index($id){

        $data = [
            'categorys' => Category::find($id),
            // 'category_all' => Category::all()
        ];

        return view('layouts.page.category', $data);
    }
}

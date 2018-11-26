<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminCategoryController extends Controller
{
    public function index(){
         return view('backoffice.category_page.categorys', ['categorys' => Category::all()]);
    }

    public function edit(Request $request, Category $category){

        if($request->isMethod('get')){
            return view('backoffice.category_page.categoryEdit',['category' => $category]);

        }
        else{

            $data = $request->all();
            $category->fill($data);
            $category->save();
            return redirect()->route('admin.categorys');
        }


    }


}

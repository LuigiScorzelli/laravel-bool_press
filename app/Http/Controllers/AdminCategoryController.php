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

    public function create(){

        return view('backoffice.category_page.categoryCreate');
    }

    public function save(Request $request){
        $data = $request->all();

        if(empty($data['name']) || empty($data['description'])){
            return 'error';
        }

        $category = new Category();
        $category->fill($data);

        $category->save();

        return redirect()->route('admin.categorys');
    }

    public function delete(Category $category){

        $category['is_active'] = 0;

        // dd($category);
        $category->delete();

        return redirect()->route('admin.categorys');
    }


}

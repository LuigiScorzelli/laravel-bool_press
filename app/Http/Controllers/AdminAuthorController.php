<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AdminAuthorController extends Controller
{
    public function index(){

        return view('backoffice.author_page.author', ['authors' => Author::all()]);
    }

    public function edit(Request $request, Author $author){

        if($request->isMethod('get')){

            return view('backoffice.author_page.authorEdit',['authors' => $author]);

        }
        else{

            $data = $request->all();
            $author->fill($data);
            $author->save();
            return redirect()->route('admin.author');
        }

    }

    public function create(){

        return view('backoffice.author_page.authorCreate');
    }

    public function save(Request $request){
        $data = $request->all();

        if( empty($data['first_name']) || empty($data['last_name']) || empty($data['description']) )
        {
            return 'error';
        }

        $author = new Author();
        $author->fill($data);
        $author->save();

        return redirect()->route('admin.author');
    }

    public function delete(Author $author){

        $author->delete();

        return redirect()->route('admin.author');

    }
}

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
}

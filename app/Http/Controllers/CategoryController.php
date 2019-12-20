<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
   
    public function store()
    {
        request()->validate([
            'name' => 'required|unique:categories'
        ]);

        $cat= new Category;
        $cat -> name = request('name');
        $cat -> save();   
        return redirect('/meals');
    }
    public function create(){

        return view('create');
        
    }

}

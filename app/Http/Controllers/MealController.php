<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Category;


class MealController extends Controller
{
    public function index(){

        return view('meals.index', [
            'meals' => Meal::all(),
            'categories' => Category::all()
        ]);

    }
    public function store(){

        $meal = new Meal;

        $meal->name= request('name');
        $meal->price=request('price');
        $meal->details=request('details');
        $image_path = request()->file('image')->store('public');
        $meal->image = str_replace('public/','',$image_path);

        $category_id = request('category');
        Category::find($category_id)->meal()->save($meal);
      
        return redirect('/meals');
        
      
    }

    public function create()
    {
        return view('meals.create', [
           
            'categories' => Category::all()
        ]);
    }


}

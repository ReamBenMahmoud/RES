<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;


class MealController extends Controller
{
    public function index(){

        return view ("meals.index", ["meals"=> meal::all()]);

    }
    public function store(){

        $meal = new Meal;
        $meal->name=" دجاج مشوي";
        $meal->price=10;
        $meal->details="فخد دجاج و صوص باربكيو";
        $meal->save();
 
        
        $meal = new Meal;
        $meal->name=" لحم مشوي";
        $meal->price=15;
        $meal->details="فخد دجاج و صوص باربكيو";
        $meal->save();

        
    }


}

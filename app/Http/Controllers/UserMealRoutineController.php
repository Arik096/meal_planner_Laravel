<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routine;


class UserMealRoutineController extends Controller
{



    public function __construct()
    {
        $this->middleware('role:user');
    }





    public function index()
    {
        $meal_routine = Routine::all();
        
        return  view('meal.userRoutine', compact('meal_routine'));

    }
    
}

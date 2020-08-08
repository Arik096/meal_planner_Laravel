<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentMealSearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }


    public function search(Request $request)
    {
        $search = $request->get('search');

        $meal = DB::table('meals')->where('date', 'like', '%'.$search.'%')->paginate(1000000);

        return view('meal.index', ['meal'=>$meal]);

    }


}

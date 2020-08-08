<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Meal;
use App\Student;

class dateWiseController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    


    public function findDate()
    {
        // $posts = Meal::all();

        // return view('meal.dateWise', compact('posts'));

        $posts = DB::table('meals')->paginate(100000);
        return view('meal.dateWise',['posts' => $posts]);
    }




    public function search(Request $request)
    {
        $search = $request->get('search');

        $posts = DB::table('meals')->where('date', 'like', '%'.$search.'%')->paginate(100000);

        return view('meal.dateWise', ['posts'=>$posts]);

    }


    public function search_month(Request $request)
    {
        $search = $request->get('search_month');

        $posts = DB::table('meals')->where('date', 'like', '%'.$search.'%')->paginate(100000);

        return view('meal.monthWise', ['posts'=>$posts]);

    }



    public function search_student(Request $request)
    {
        $search = $request->get('search_student');

        $posts = DB::table('meals')->where('student_id', 'like', '%'.$search.'%')->paginate(100000);

        return view('meal.studentWise', ['posts'=>$posts]);

    }



    public function search_student_record(Request $request)
    {
        $search = $request->get('search_student_record');

        $students = DB::table('students')->where('student_id', 'like', '%'.$search.'%')->paginate(10);

        return view('student.index', ['students'=>$students]);

    }









}

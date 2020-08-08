<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Student;
use App\Meal;
use Auth;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */







    public function __construct()
    {
        $this->middleware('role:user');
    }








     
    public function index()
    {

        // return view('meal.index');

        // $meal = Meal::all();
        
        // return  view('meal.index', compact('meal'));
        // $email = session('info');

        $email = Auth::user()->email;

        $student_details = DB::table('students')

        ->where('email',$email)
        ->first();






try{

  $student_name = $student_details->student_name;

}

catch (\Exception $ex){
  
   dd('Please, Contact with your Admin for Registration');



} 










        $student_id = $student_details->student_id;

        // dd($student_id);

        $meal = DB::table('meals')->where('student_id',$student_id)->paginate(10);
        return view('meal.index',['meal' => $meal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $email = session('info');
        $email = Auth::user()->email;

        $student_id = DB::table('students')

        ->where('email',$email)
        ->first();

        //dd($student_id);
        // ->get();
        

        $request->validate(
            [
                
                //'student_id' => 'required|numeric',
                'date' => 'required|date',
                'breakfast' => 'required|numeric',
                'lunch' => 'required|numeric',
                'dinner' => 'required|numeric'
                
            ]

            
        );

        

        $meal = new Meal([





            
            'student_id' => $student_id->student_id,
            'date' => $request->get('date'),
            'breakfast' => $request->get('breakfast'),
            'lunch' => $request->get('lunch'),
            'dinner' => $request->get('dinner'),

            

        ]);

       

        


        $meal->save();
        return redirect()->back()->with('message','Meal Record Added Successfully! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}



?>
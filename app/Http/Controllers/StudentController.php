<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    


    public function index()
    {




        // $students = Student::all();
        
        // return  view('student.index', compact('students'));


        $students = DB::table('students')->paginate(5);

        return view('student.index', ['students'=>$students]);


        
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
        //return $request;



      
        $request->validate(
            [
                'name' => 'required|string',
                'student_id' => 'required|numeric',
                'email' => 'required|email',
                'dept' => 'required|string',
                'lt' => 'required|string',
                'batch' => 'required|numeric',
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
                
            ]);


   






















    $student = new Student([
        'student_name' => $request->get('name'),
        'student_id' => $request->get('student_id'),
        'email' => $request->get('email'),
        'student_dept' => $request->get('dept'),
        'student_lt' => $request->get('lt'),
        'batch' => $request->get('batch'),
        

    ]);







        if($request->hasFile('image')){
            
            $fileName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('image'),$fileName);
            $student->image = $fileName;
        }


        else{
            $fileName = "default.png";
            $student->image = $fileName;
        }

        // $errors = "Duplicate Entry!";
        

        try{

            $student->save();
        }


        catch(\Exception $error){
            return redirect()->back()->with('dan-msg',"Duplicate Entry! Your Email or ID Has been Taken!");
        }

     






        return redirect()->back()->with('message','Student Added Successfully!');
    }



   

























    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $student = Student::find($id);
        //dd($student);
        return view('student.show', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $student = Student::find($id);
        return view('student.edit', compact('student'));
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
        $student = Student::find($id);

        $request->validate([

            'name' => 'required',
            'id' => 'required',
            'dept' => 'required',
            'lt' => 'required',
            'batch' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',

        ]);


        if($request->hasFile('image')){
            
            $fileName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('image'),$fileName);
            $student->image = $fileName;
        }

        $student->student_name = $request->name;
        $student->student_id = $request->id;
        $student->student_dept = $request->dept;
        $student->student_lt = $request->lt;
        $student->batch = $request->batch;
        

        $student->save();
        return redirect()->route('student.index')->with('msg','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();
        return redirect()->route('student.index')->with('dan-msg','Data Deleted Successfully');
    }
}

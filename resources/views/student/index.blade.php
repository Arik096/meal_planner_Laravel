@extends('adminlte::page')

@section('title', 'Student Details')

@section('content')





<div class="container-fluid">






    <div class="row">
        <div class="col-md-12">




        <!-- Large modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Add Student</button>



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif






            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <style>
                        .modal-content{
                            padding: 20px;
                        }
                    
                    </style>





                    <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        
                        <h2 style="color:blue;"><center>Add Student Information</center></h2>






                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Full name">
                     
                        </div>
                        <div class="form-group">
                            <label for="id">Student ID</label>
                            <input type="numeric" class="form-control" name="student_id" placeholder="Enter Your ID">
                        </div>
                        <div class="form-group">
                            <label for="email">Student Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="dept">Department</label>
                            <select name="dept" class="form-control">
                            
                            <option value="cse">CSE</option>
                            <option value="eee">EEE</option>
                            <option value="ce">CE</option>
                            <option value="bba">BBA</option>
                            <option value="english">English</option>
 
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="levelterm">Level Term</label>
                            <select name="lt" class="form-control">
                            
                            <option value="L1T1">Level-1, Term-1</option>
                            <option value="L1T2">Level-1, Term-2</option>
                            <option value="L2T1">Level-2, Term-1</option>
                            <option value="L2T2">Level-2, Term-2</option>
                            <option value="L3T1">Level-3, Term-1</option>
                            <option value="L3T2">Level-3, Term-2</option>
                            <option value="L4T1">Level-4, Term-1</option>
                            <option value="L4T2">Level-4, Term-2</option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="batch">Batch</label>
                            <input type="numeric" class="form-control" name="batch" placeholder="Enter Batch in Numeric">
                        </div>

                        <div class="form-group">
                        
                            <label for="image">Profile Image</label>
                            <input type="file" name="image" id="">
                        
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>




                    </form>





                </div>







            </div>
            </div>









        </div>


    </div>









</div>


<br>
<br>


@if(Session::has('message'))

<div class="alert alert-success">
                        
    {{ Session::get('message') }}                    
                        
</div>

@endif



@if (Session::has('msg'))

<div class="alert alert-success">


    {{ Session::get('msg') }}

</div>


@endif


@if (Session::has('dan-msg'))

<div class="alert alert-danger">


    {{ Session::get('dan-msg') }}

</div>


@endif







<div class="container container-inline">

  <form action="/search_student_record" method="post">



  @csrf
  @method('get')




    <div class="form-inline" style="padding:10px;">


    <label for="">Student ID</label>

        <input type="numeric" class="form-control" name="search_student_record" placeholder="Enter Student ID" style="margin:10px;">
        <button type="submit" class="btn btn-primary">Search</button>

    </div>



    
  </form>

 





</div>









<br>



















<div class="container">




    
    <div class="row">
    
    
        <div class="col-md-12">


         
         <table class="table table-striped">
         
            
         
            <thead>
            
                <th>Student Name</th>
                <th>Student ID</th>
                <th>Email</th>
                <th>Department</th>
                <th>Level Term</th>
                <th>Batch</th>
                <th>Image</th>
                <th>Action</th>
            
            </thead>


            <tbody>
            
            
                @foreach($students as $student)


                    <tr>
                    
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->student_dept }}</td>
                        <td>{{ $student->student_lt }}</td>
                        <td>{{ $student->batch }}</td>
                        <td><img src="{{ asset('image'.'/'.$student->image) }}" alt="" height="50" width="50"> </td>


                        <td>
                        
                            <a href="{{ route('student.show',$student->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('student.edit',$student->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('student.destroy',$student->id) }}" class="btn btn-danger">Delete</a>
                        
                        </td>
                        

                    
                    </tr>




                @endforeach
            
            
            
            </tbody>
         
         
         </table>

         {{ $students->links() }}
            
         
         
         
        </div>               
    
    
    </div>                    




</div>










@endsection
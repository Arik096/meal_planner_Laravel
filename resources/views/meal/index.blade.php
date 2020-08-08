<?php



use Illuminate\Support\Facades\DB;
use App\Student;
use App\Meal;







// $email = session('info');

$email = Auth::user()->email;


$student_details = DB::table('students')

->where('email',$email)
->first();






if($student_details == null){

    ?>
  
  
  
  
  
                  <form action="{{ route('logout') }}" method="POST">
                  
                  @csrf
                  
                  <br>
  
                  <button type="submit" style="color:blue; width:80px; height:30px; margin-left:20px;">Logout</button>
  
                  <br>
                  <br>
                  
                  </form>
  
  
  
  
  
  
  
  <?php
  
  
  
  
  
  
  
  
  
    
  }
  
  
  
  
  try{
  
    $student_name = $student_details->student_name;
  
  }
  
  catch (\Exception $ex){
    
     dd('Please, Contact with your Admin for Registration');
  
  
  
  
  
  
  
  
  
  
  
  } 
  











$student_id = $student_details->student_id;

// dd($student_id);





?>














@extends('layouts.user')

@section('content')

<br>
<div class="container">

                    @if (session('nothing'))
                        <div class="alert alert-success" role="alert">
                            {{ session('nothing') }}
                        </div>

                        
                    @endif



                    <!-- <?php  $email = session('info');
                        
                    
                    echo $email;
             
                    
                    ?> -->

                    













<div class="container-fluid">






<div class="row">
    <div class="col-md-12">




    <!-- Large modal -->
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Add Meal</button>



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





                <form action="{{ route('Meal.store') }}" method="post" enctype="multipart/form-data">

                    @csrf
                    
                    <h2 style="color:blue;"><center>Add Meal Record</center></h2>





                    <a href="{{route('Meal.store')}}"></a>




                    <!-- <div class="form-group">
                        <label for="id">Student ID</label>
                        <input type="numeric" class="form-control" name="student_id" placeholder="Enter Your ID">
                    </div> -->
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" class="form-control" name="date" placeholder="Enter Date">
                    </div>

                    
                    <div class="form-group">
                        <label for="">Breakfast</label>
                        <select name="breakfast"  class="form-control">
                        
                        <option value="1">Meal</option>
                        <option value="0">Cancel Meal</option>
                        
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Lunch</label>
                        <select name="lunch"  class="form-control">
                        
                        <option value="1">Meal</option>
                        <option value="0">Cancel Meal</option>
                        
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Dinner</label>
                        <select name="dinner"  class="form-control">
                        
                        <option value="1">Meal</option>
                        <option value="0">Cancel Meal</option>
                        
                        
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>




                </form>





            </div>







        </div>
        </div>









    </div>


</div>






<br>





















<div class="container container-inline" > 

  <form action="/user/search" method="post">



  @csrf
  @method('get')




    <div class="form-inline" style="padding:10px;">


    <label for="">Date</label>

        <input type="date" class="form-control" name="search" placeholder="Enter Date" style="margin:10px;">
        <button type="submit" class="btn btn-primary">Search</button>

    </div>



    
  </form>

 





</div>







<br>
























<div class="container">

    
    <div class="row">
    
    
        <div class="col-md-12">
         
         <table class="table table-striped">

         <h3 style="color:blue;">Meal Record</h3>
         
            
         
            <thead>
            
                
                <th>Student ID</th>
                <th>Date</th>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Dinner</th>
                <!-- <th>Action</th> -->
            
            </thead>


            <tbody>
            
            
                @foreach($meal as $item)

                    @if($student_id == $item->student_id)

                        



                    


                    <tr>
                    
                        
                        <td>{{ $item->student_id }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->breakfast }}</td>
                        <td>{{ $item->lunch }}</td>
                        <td>{{ $item->dinner }}</td>


                        <!-- <td>
                        
                            <a href="#" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        
                        </td> -->
                        

                    
                    </tr>

                    @endif




                @endforeach
            
            
            
            </tbody>
         
         
         </table>

         {{ $meal->links() }}
            
         
         
         
        </div>               
    
    
    </div>                    




</div>





































</div>


















































































@endsection





























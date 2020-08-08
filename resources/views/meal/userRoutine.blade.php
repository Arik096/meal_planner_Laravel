@extends('layouts.user')

@section('title', 'Meal Routine') 

@section('content')






<?php


use Illuminate\Support\Facades\DB;
use App\student;



$email = Auth::user()->email;

// $email = session('info');

$student_details = DB::table('students')

->where('email',$email)
->first();





     // dd('Please Contact With Your Admin For Registration');

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







?>



















<br>

<h3 style="color:blue; padding:15px;"><center>Meal Routine</center></h3>



<div class="container">

    
    <div class="row">
    
    
        <div class="col-md-12">
         
         <table class="table table-striped">

        
         
            
         
            <thead>
            
                
                
                
                <th style="background:blue;">Day</th>
                <th style="background:blue;">Breakfast</th>
                <th style="background:blue;">Lunch</th>
                <th style="background:blue;">Dinner</th>

            
            </thead>


            <tbody>
            
            
                @foreach($meal_routine as $item)


                




              

                        



                    


                    <tr>


                        
                        

                        <td style="color:blue; ">{{ $item->day }}</td>
                        <td>{{ $item->breakfast }}</td>
                        <td>{{ $item->lunch }}</td>
                        <td>{{ $item->dinner }}</td>



                        

                    
                    </tr>

                   


                

                @endforeach
            
            
            
            </tbody>
         
         
         </table>


 

        
            
         
         
         
        </div>               
    
    
    </div>                    




</div>






























@endsection
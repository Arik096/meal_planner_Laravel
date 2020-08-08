@extends('layouts.user')

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



































    




$student_name = $student_details->student_name;
$student_id = $student_details->student_id;
$email = $student_details->email;
$student_dept = $student_details->student_dept;
$student_lt = $student_details->student_lt;
$batch = $student_details->batch;
$image = $student_details->image;






?>





<!-- <br>
<center>

<div class="border" style="color:blue;  width: 500px; ">

<br>

<h3>Student Profile</h3>

<br>

<h3><center><img src="{{ asset('image'.'/'.$image) }}" alt="" height="150" width="150" class="brand-image img-circle elevation-3"></center></h3>


<br>




<h3>Name: {{$student_name}}</h3>
<h3>ID: {{$student_id}}</h3>
<h3>Email: {{$email}}</h3>
<h3>Department: {{$student_dept}}</h3>
<h3>Level-Term: {{$student_lt}}</h3>
<h3>Batch: {{$batch}}</h3>


</div>


</center>





<br>
<br> -->





<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

     <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
</head>








<body>



     <div class="card-container">


         <div class="upper-container">


 


       


               <div class="image-container">




                    <?php $default_image = 'default.png'; ?>

                    

                    <img src="{{ asset('image'.'/'.$image) }}" alt="">


               </div>



         </div>


         <div class="lower-container">
               
               <br>
               <br>

               <h5 style="margin-left:20px; color:blue;">Name: {{$student_name}}</h5>
               <h5 style="margin-left:20px; color:blue;">ID: {{$student_id}}</h5>
               <h5 style="margin-left:20px; color:blue;">Email: {{$email}}</h5>
               <h5 style="margin-left:20px; color:blue;"> Department: {{$student_dept}}</h5>
               <h5 style="margin-left:20px; color:blue;">Level-Term: {{$student_lt}}</h5>
               <h5 style="margin-left:20px; color:blue;">Batch: {{$batch}}</h5>

         
         </div>
     
     
     
     
     </div>



     
</body>














</html>























@endsection
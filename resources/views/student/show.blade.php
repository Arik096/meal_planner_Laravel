@extends('adminlte::page')

@section('title', 'Student Details')

@section('content')


<!-- <br>
<center>

<div class="border" style="width: 500px; ">

<br>

<h3 style="color:blue;"><center>Student Profile</center></h3>

<br>


<h3><center><img src="{{ asset('image'.'/'.$student->image) }}" alt="" height="150" width="150" class="brand-image img-circle elevation-3"></center></h3>


<br>





<h3 style="color:blue;">Name: {{$student->student_name}} </h3>
<h3 style="color:blue;">ID: {{$student->student_id}} </h3>
<h3 style="color:blue;">Email: {{$student->email}} </h3>
<h3 style="color:blue;">Department: {{$student->student_dept}} </h3>
<h3 style="color:blue;">Level, Term: {{$student->student_lt}} </h3>
<h3 style="color:blue;">Batch: {{$student->batch}} </h3>










</div>
<br><br><br>

</center> -->





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

                    

                    <img src="{{ asset('image'.'/'.$student->image) }}" alt="">


               </div>



         </div>


         <div class="lower-container">
               
               <br>
               <br>

               <h5 style="margin-left:20px; color:blue;">Name: {{$student->student_name}}</h5>
               <h5 style="margin-left:20px; color:blue;">ID: {{$student->student_id}}</h5>
               <h5 style="margin-left:20px; color:blue;">Email: {{$student->email}}</h5>
               <h5 style="margin-left:20px; color:blue;"> Department: {{$student->student_dept}}</h5>
               <h5 style="margin-left:20px; color:blue;">Level-Term: {{$student->student_lt}}</h5>
               <h5 style="margin-left:20px; color:blue;">Batch: {{$student->batch}}</h5>

         
         </div>
     
     
     
     
     </div>



     
</body>














</html>




















@endsection



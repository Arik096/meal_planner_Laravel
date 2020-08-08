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







?>

































<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('nothing'))
                        <div class="alert alert-success" role="alert">
                            {{ session('nothing') }}
                        </div>
                    @endif









                    You are Logged in As User
                    

                    <!-- <a href="/Meal" class="btn btn-primary">Meal</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
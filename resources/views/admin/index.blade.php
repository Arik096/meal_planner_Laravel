
<?php   
use App\Meal;



// $meals = Meal::all();


$breakfast = count(Meal::whereDate('date', now()->addDays(1))->where('breakfast','1')->get());

$lunch = count(Meal::whereDate('date', now()->addDays(1))->where('lunch','1')->get());

$dinner = count(Meal::whereDate('date', now()->addDays(1))->where('dinner','1')->get());


// $date = date('Y-m-d H:i:s');

// dd($date);


// $count = count($meals);


 

// dd($breakfast,$lunch,$dinner);




?>












@extends('adminlte::page')

@section('title', 'Admin Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop




@section('content')

<br>
<br>
<div class="container-fluid">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif







        <div class="row">
        
        




            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <h4>Total Breakfast</h4>
                <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                <h3>{{$breakfast}}<sup style="font-size: 20px">Person</sup></h3>

                
              </div>
              <div class="icon">
                <i class="far fa-fw fa-user"></i>
              </div>
              <a href="/admin/dateWise" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            </div>












            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

                <h4>Total Lunch</h4>
                <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                <h3>{{$lunch}}<sup style="font-size: 20px">Person</sup></h3>

                
              </div>
              <div class="icon">
                <i class="far fa-fw fa-user"></i>
              </div>
              <a href="/admin/dateWise" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            </div>













            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">

                <h4>Total Dinner</h4>
                <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                <h3>{{$dinner}}<sup style="font-size: 20px">Person</sup></h3>

                
              </div>
              <div class="icon">
                <i class="far fa-fw fa-user"></i>
              </div>
              <a href="/admin/dateWise" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            </div>

















        </div>















</div>






























@endsection
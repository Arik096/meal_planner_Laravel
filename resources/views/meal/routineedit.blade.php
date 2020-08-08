@extends('adminlte::page')



@section('title', 'Meal Edit')

@section('content')


    <div class="container">
    
        <div class="row">
        
            <div class="col-md-12">



            
                <form action="{{route('Routine.update', $routine->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                @method('patch')
                
                    <div class="form-group">
                    
                        <label for="">Breakfast:</label>
                        <input type="text" name="breakfast" class="form-control" value="{{ $routine->breakfast }}">
                    
                    </div>


                    <div class="form-group">
                        
                        <label for="">Lunch:</label>
                        <input type="numeric" name ="lunch" class="form-control" value="{{ $routine->lunch }}">
                    
                    </div>


                    <div class="form-group">
                        
                        <label for="">Dinner:</label>
                        <input type="text" name="dinner" class="form-control" value="{{ $routine->dinner }}">
                    
                    </div>



                    <br>

                    <div class="form-group">
                    
                    
                        <button type="submit" class="btn btn-success float-right">Submit</button>
            
                    </div>
                
                </form>
            
            </div>
        
        </div>
    
    </div>


@endsection
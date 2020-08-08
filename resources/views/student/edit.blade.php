@extends('adminlte::page')

@section('title', 'Student Edit')

@section('content')


    <div class="container">
    
        <div class="row">
        
            <div class="col-md-12">



            
                <form action="{{route('student.update', $student->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                @method('patch')
                
                    <div class="form-group">
                    
                        <label for="">Student Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $student->student_name }}">
                    
                    </div>


                    <div class="form-group">
                        
                        <label for="">Student ID:</label>
                        <input type="numeric" name ="id" class="form-control" value="{{ $student->student_id }}">
                    
                    </div>


                    <div class="form-group">
                        
                        <label for="">Department:</label>
                        <input type="text" name="dept" class="form-control" value="{{ $student->student_dept }}">
                    
                    </div>

                    <div class="form-group">
                        
                        <label for="">Level Term:</label>
                        <input type="text" name="lt" class="form-control" value="{{ $student->student_lt }}">
                    
                    </div>

                    <div class="form-group">
                    
                        <label for="">Batch:</label>
                        <input type="text" name="batch" class="form-control" value="{{ $student->batch }}">
                
                    </div>

                    <div class="form-group">
                        
                        <label for="image">Profile Image</label>
                        <input type="file" name="image" value="" id="">
                    
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
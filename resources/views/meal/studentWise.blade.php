@extends('adminlte::page')

@section('title', 'Date Wise') 

@section('content')







<div class="container container-inline">

  <form action="/search_student" method="post">



  @csrf
  @method('get')




    <div class="form-inline" style="padding:10px;">


    <label for="">Student ID</label>

        <input type="numeric" class="form-control" name="search_student" placeholder="Enter Student ID" style="margin:10px;">
        <button type="submit" class="btn btn-primary">Search</button>

    </div>



    
  </form>

 





</div>







<div class="container">

    
    <div class="row">
    
    
        <div class="col-md-12">
         
         <table class="table table-striped">

        
         
            
         
            <thead>
            
                
                <th>Student ID</th>
                <th>Date</th>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Dinner</th>
                <!-- <th>Action</th> -->
            
            </thead>


            <tbody>
            
            
                @foreach($posts as $item)




              

                        



                    


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

                   




                @endforeach
            
            
            
            </tbody>
         
         
         </table>


         

        
            
         
         
         
        </div>               
    
    
    </div>                    




</div>










@endsection
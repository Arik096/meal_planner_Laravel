@extends('adminlte::page')

@section('title', 'Meal Routine') 

@section('content')





<div class="container">

    
    <div class="row">
    
    
        <div class="col-md-12">

        <center><h3 style="color:blue;">Meal Routine</h3></center>

        <br>
         
         <table class="table table-striped">

        
         
            
         
            <thead>
            
                
                
                
                <th style="background:blue;">Day</th>
                <th style="background:blue;">Breakfast</th>
                <th style="background:blue;">Lunch</th>
                <th style="background:blue;">Dinner</th>
                <th style="background:blue;">Action</th>
            
            </thead>


            <tbody>
            
            
                @foreach($posts as $item)


                




              

                        



                    


                    <tr>


                        
                        

                        <td style="color:blue; ">{{ $item->day }}</td>
                        <td>{{ $item->breakfast }}</td>
                        <td>{{ $item->lunch }}</td>
                        <td>{{ $item->dinner }}</td>



                        <td>
                        
                            <!-- <a href="#" class="btn btn-primary">View</a> -->
                            <a href="{{ route('Routine.edit',$item->id) }}" class="btn btn-success" >Edit Meal</a>
                            <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                        
                        </td>
                        

                    
                    </tr>

                   


                

                @endforeach
            
            
            
            </tbody>
         
         
         </table>


 

        
            
         
         
         
        </div>               
    
    
    </div>                    




</div>






























@endsection
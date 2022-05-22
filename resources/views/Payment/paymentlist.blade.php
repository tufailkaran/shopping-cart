@extends('index')
@section("content")
@yield('content')
    
<div class="container">
     <div class="row align-items-center">
         <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                  <h4>Payments</h4>
                   <hr>
               </div>     
               
               <div class="card-body">
                    <table class="table table-bordered table-striped container">
                         <thead>
                              <tr>
                                   <td>Id</td>
                                   <td>Name</td>
                                   <td>Payment Token</td>
                                   <td>Action</td>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($payment as $item)
                              <tr>
                                   <td>{{ $item['id'] }}</td>
                                   <td>{{ $item['name'] }}</td>
                                   <td>{{ $item['paymentToken'] }}</td>
                                   <td>
                                        <a href="{{ url('edit-payment/'.$item['id']) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('delete-payment/'.$item['id']) }}" class="btn btn-danger">Delete</a>
                                   </td>
                              </tr>
                              @endforeach
                              
                         </tbody>
                    </table>
               </div>

          </div>
         </div>
     </div>
</div>        
@endsection 
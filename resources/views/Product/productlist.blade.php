@extends('index')
@section("content")
@yield('content')
    
<div class="container">
     <div class="row align-items-center">
         <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                  <h4>Products</h4>
                   <hr>
               </div>     
               
               <div class="card-body">
                    <table class="table table-bordered table-striped container">
                         <thead>
                              <tr>
                                   <td>Id</td>
                                   <td>Name</td>
                                   <td>Price</td>
                                   <td>Description</td>
                                   <td>Category</td>
                                   <td>Image</td>
                                   <td>Action</td>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($product as $item)
                              <tr>
                                   <td>{{ $item['id'] }}</td>
                                   <td>{{ $item['name'] }}</td>
                                   <td>{{ $item['price'] }}</td>
                                   <td>{{ $item['description'] }}</td>
                                   <td>{{ $item['category'] }}</td>
                                   <td><img class="products-img" src="{{ $item['gallery'] }}" ></td>
                                   <td>
                                        <a href="{{ url('edit-product/'.$item['id']) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('delete-product/'.$item['id']) }}" class="btn btn-danger">Delete</a>
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
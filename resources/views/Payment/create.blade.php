@extends('index')
@section("content")
<div class="container">
     <div class="row align-items-center">
         <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                  <h4>Add Payment</h4>
                   <hr>
               </div>     
               <div class="card-body">
                   <form action="{{ url('insert-payment') }}" method="post" enctype="multipart/form-data">
                         @csrf
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="name" class="form-label">Name</label>
                                   <input type="text" class="form-control" name="name" id="name" placeholder="Enter Payment Name">
                              </div>
                         </div>
                         <br>
                         
                         
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="paymentToken" class="form-label">Payment Token</label>
                                   <input type="text" class="form-control" name="paymentToken" id="paymentToken" placeholder="Enter Payment Token">
                              </div>
                         </div>
                         
                         <br>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <input type="submit" class="form-control" name="submit" id="submit" value="Add Payment">
                              </div>
                         </div>
                   </form>
               </div>

          </div>
         </div>
     </div>
</div>        
<br>
<br>
<br>
<br>
@endsection 
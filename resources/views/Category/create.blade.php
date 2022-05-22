@extends('index')
@section("content")
<div class="container">
     <div class="row align-items-center">
         <div class="col-md-12">
          <div class="card">
               <div class="card-header">
                  <h4>Add Category</h4>
                   <hr>
               </div>     
               <div class="card-body">
                   <form action="{{ url('insert-category') }}" method="post" enctype="multipart/form-data">
                         @csrf
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="name" class="form-label">Name</label>
                                   <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
                              </div>
                         </div>
                         <br>
                         
                         
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="description" class="form-label">Description</label>
                                   <input type="text" class="form-control" name="description" id="description" placeholder="Enter Category Description">
                              </div>
                         </div>
                         <br>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="gallery" class="form-label">Category Image</label>
                                   <input type="file" class="form-control" name="gallery" id="gallery" placeholder="Enter Category Image URL">
                              </div>
                         </div>
                         <br>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <input type="submit" class="form-control" name="submit" id="submit" value="Add Category">
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
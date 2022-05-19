@extends('index')
@section("content")

<div class="container">
     <div class="row align-items-center">
         <div class="col-md-12">
          <div class="card">
               
               <div class="card-header">
                  <h4>Edit Product</h4>
                   <hr>
               </div>     
               <div class="card-body">
                   <form action="{{ url('update-product/'.$products->id) }}" method="post">
                    @method('put')     
                    @csrf
                         <!--<input type="hidden" class="form-control" name="id" id="id" value="{{ $products->id }}">-->
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="name" class="form-label">Name</label>
                                   <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product Name" value="{{ $products->name }}">
                              </div>
                         </div>
                         <br>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="price" class="form-label">Price</label>
                                   <input type="text" class="form-control" name="price" id="price" placeholder="Enter Product Price" value="{{ $products->price }}">
                              </div>
                         </div>
                         <br>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="category" class="form-label">Product Category</label>
                                   <input type="text" class="form-control" name="category" id="category" placeholder="Enter Product Category" value="{{ $products->category }}">
                              </div>
                         </div>
                         <br>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="description" class="form-label">Description</label>
                                   <input type="text" class="form-control" name="description" id="description" placeholder="Enter Product Description" value="{{ $products->description }}">
                              </div>
                         </div>
                         <br>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="gallery" class="form-label">Product Image</label>
                                   <input type="text" class="form-control" name="gallery" id="gallery" placeholder="Enter Product Image URL" value="{{ $products->gallery }}">
                              </div>
                         </div>
                         <br>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <input type="submit" class="form-control" name="submit" id="submit" value="Update Product">
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
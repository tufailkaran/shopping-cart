<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>
<nav class="navbar navbar-default">
     <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header ">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="/">Shopping Cart System</a>
       </div>
   
       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
           <li class="active"><a href="/">Home </a></li>
           
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
             <ul class="dropdown-menu">
              <li><a href="/categories">Category List</a></li>
              <li><a href="/addcategory">Add Category </a></li>
               
             </ul>
           </li>
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/products">Product List</a></li>
              <li><a href="/addproduct">Add Product </a></li>
            </ul>
          </li>
<<<<<<< HEAD
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payment <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/payments">Pyyment List</a></li>
              <li><a href="/addpayment">Add Payment </a></li>
            </ul>
          </li>
=======
>>>>>>> f89bbd4c08e1ec3651c07b86bf6137cebdbb1c93
          <!-- <li class="active"><a href="/products">Products</a></li> -->
          <li class="active"><a href="/myorders">Orders</a></li>
          <li class="active"><a href="#">Invoices</a></li>
         </ul>
         
           
           
         <form class="navbar-form navbar-left" action="/search">
           <div class="form-group">
             <input type="text" class="form-control search-box" placeholder="Search">
           </div>
           <button type="submit" class="btn btn-default">Search</button>
         </form>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="cartlist">Cart({{ $total }})</a></li>
           @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          @endif
         </ul>
       </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
   </nav>
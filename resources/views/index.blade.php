<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Shopping Cart System</title>
     
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >

     <!-- jQuery Script -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <!-- Latest compiled and minified JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" ></script>
     
</head>
<body>
     {{ View::make('Layout.header') }}
     @yield('content')
      
     {{ View::make('Layout.footer') }}
</body>
<style>
     .custom-login{
          height: 570px;
          padding-top: 150px;

     }
     img.slider-img{
          height: 400px !important;
     }
     .custom-product{
          height: 600px;
     }
     .slider-text{
          background-color: #35443585 !important;
     }
     .trending-wrapper{
          margin: 30px;
     }
     .trending-img{
          height: 100px;
     }
     .trending-item{
          float: left;
          width: 20%;
     }
     .detail-img{
          height: 200px;
     }
     .search-box{
          width: 500px !important;
     }
     
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .products-img, .category-img{
         height: 100px;
    }
</style>
<!-- Latest Sweet Alert CDN -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
     <script>
          swal("{{ session('status') }}");
     </script>
@endif
</html>
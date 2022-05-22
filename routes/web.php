<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
<<<<<<< HEAD
use App\Http\Controllers\PaymentController;
=======
>>>>>>> f89bbd4c08e1ec3651c07b86bf6137cebdbb1c93
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [ProductController::class, 'product']);
Route::get('products', [ProductController::class, 'productList']);
Route::get('addproduct', [ProductController::class, 'addProduct']);
Route::post('insert-product', [ProductController::class, 'insertProduct']);
Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);
Route::put('update-product/{id}', [ProductController::class, 'updateProduct']);
<<<<<<< HEAD
Route::get('delete-product/{id}', [ProductController::class, 'deleteProduct']);
=======
Route::get('delete -product/{id}', [ProductController::class, 'deleteProduct']);
>>>>>>> f89bbd4c08e1ec3651c07b86bf6137cebdbb1c93
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
<<<<<<< HEAD
Route::get("create-invoice/{id}",[ProductController::class,'addInvoice']);
=======
>>>>>>> f89bbd4c08e1ec3651c07b86bf6137cebdbb1c93
Route::get("delete-order/{id}",[ProductController::class,'deleteOrder']);
Route::get("categories",[CategoryController::class,'categoryList']);
Route::get("addcategory",[CategoryController::class,'addCategory']);
Route::post('insert-category', [CategoryController::class, 'insertCategory']);
<<<<<<< HEAD
Route::get('edit-category/{id}', [CategoryController::class, 'editCategory']);
Route::put('update-category/{id}', [CategoryController::class, 'updateCategory']);
Route::get('delete-category/{id}', [CategoryController::class, 'deleteCategory']);
Route::get('querylog', [CategoryController::class, 'queryLog']);
/*\DB::listen(function($query){
    print_r("DB: " . $query->sql . "[" . implode(",", $query->bindings)."]");
});*/ 
Route::get('payments', [PaymentController::class, 'paymentList']);
Route::get('addpayment', [PaymentController::class, 'addPayment']);
Route::post('insert-payment', [PaymentController::class, 'insertPayment']);
Route::get('edit-payment/{id}', [PaymentController::class, 'editPayment']);
Route::put('update-payment/{id}', [PaymentController::class, 'updatePayment']);
Route::get('delete-payment/{id}', [PaymentController::class, 'deletePayment']);
=======
 
>>>>>>> f89bbd4c08e1ec3651c07b86bf6137cebdbb1c93

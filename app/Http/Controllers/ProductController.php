<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Illuminate\Session\Middleware\StartSession;
use Session;

class ProductController extends Controller
{
    //
    
    function product(){
        $data = Product::all();
        return view('product', ['product'=>$data]);
    }
    function productList(){
        $data = Product::all();
        return view('Product.productlist', ['product'=>$data]);
    }
    function addProduct(){
        
        return view('Product.create');
    }
    function insertProduct(Request $req){
        $products = new Product();
        $products->name = $req ->input('name');
        $products->price = $req ->input('price');
        $products->category = $req ->input('category');
        $products->description = $req ->input('description');
        $products->gallery = $req ->input('gallery');
        $products->save();
        return redirect('products')->with('status',"Product Added Successfully");
    }
    public function editProduct($id){
        $products = Product::find($id);
        return view('Product.editProduct', compact('products') );
    }
    public function updateProduct(Request $req, $id){
        $products = Product::find($id);
        $products->name = $req ->input('name');
        $products->price = $req ->input('price');
        $products->category = $req ->input('category');
        $products->description = $req ->input('description');
        $products->gallery = $req ->input('gallery');
        $products->update();
        return redirect('products')->with('status',"Product Updated Successfully");
    }
    public function deleteProduct($id){
        $products = Product::find($id);
        $products->delete();
        return redirect('products')->with('status',"Product Deleted Successfully");
    }
    function detail($id){
        $data = product::find($id);
        return view('detail', ['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['product'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
 
         return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    
    }
    function addInvoice()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('Invoice.create',['orders'=>$orders]);
    
    }
    public function deleteOrder($id){
        $orders = Order::find($id);
        $orders->delete();
        return redirect('myorders')->with('status',"Order Deleted Successfully");
    }
}
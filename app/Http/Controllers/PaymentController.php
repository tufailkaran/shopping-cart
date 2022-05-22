<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PaymentController extends Controller
{
    public function paymentList()
    {
        $payment = Payment::all();
        return view('Payment.paymentlist', compact('payment'));
    }
    public function addPayment(Request $req)
    {
        
        return view('Payment.create');
    } 
    public function insertPayment(Request $req)
    {
        $payment = new Payment();
        $payment->name = $req ->input('name');
        $payment->paymentToken = $req ->input('paymentToken');
        $payment->save();
        return redirect('payments')->with('status',"Payment Added Successfully");
    } 
    public function editPayment($id){
        $payment = Payment::find($id);
        return view('Payment.editpayment', compact('payment') );
    }
    public function updatePayment(Request $req, $id)
    {
        $payment = Payment::find($id);
        $payment->name = $req ->input('name');
        $payment->paymentToken = $req ->input('paymentToken');
        $payment->update();
        
        return redirect('payments')->with('status',"Payment Updated Successfully");
    }
    public function deletePayment($id){
        $payment = Payment::find($id);
        $payment->delete();
        return redirect('payments')->with('status',"Payment Deleted Successfully");
    }
}

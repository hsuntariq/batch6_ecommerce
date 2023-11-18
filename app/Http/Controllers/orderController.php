<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function postOrder(Request $req){
        $_id = auth()->user()->id;
        $formFields = $req->validate([
            "name" => ['required'],
            "email" => ['required'],
            "phone" => ['required'],
            "zip" => ['required'],
            "address" => ['required'],
            
        ]);
        $formFields['user_id'] = $_id;

        Order::create($formFields);
        return back()->with('message','Ordered Placed Successfully');

    }

    public function getOrders(){
        $order = Order::all();
        return view('pages.admin.orders',compact('order'));
    }

}

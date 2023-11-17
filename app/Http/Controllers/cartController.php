<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function addToCart(Request $req){
        if($req->input('action') == 'buy'){
            echo "buy";
        }else{
           $_id = auth()->user()->id; 
           $formFields = [
            'name' => $req->input('name'),
            'price' => $req->input('price'),
            'quantity' => $req->input('quantity'),
            'image' => $req->input('image'),
            'user_id' => $_id
           ];

           Cart::create($formFields);
           return back()->with('success','Added to cart');


        }
    }

    public function getUserCart(){
        $_id = auth()->user()->id;
        $cart = Cart::where('user_id',$_id)->get(); 
    return view('pages.user.cart',compact('cart'));
    }

    public function deleteCartItem($id){
        $cartItem = Cart::find($id);
        $cartItem->delete();
        return back()->with('success','Item deleted Successfully');
    }


}

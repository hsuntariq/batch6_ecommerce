<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function insertProduct(Request $req){
        $formFields = $req->validate([
            "name" => ['required','string','min:3','max:20'],
            "price" =>['required','min:3','max:5'],
            "desc" => ['required','min:5'],
            "category" => ['required'],
            "image" => ['required','']
        ]);

        // store the image in a new folder
        $formFields['image'] = $req->file("image")->store("product_images","public");

        Product::create($formFields);
        return back()->with('message','Product added successfully!!!');
        

        


    }
}

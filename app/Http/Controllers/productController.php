<?php

namespace App\Http\Controllers;

use App\Charts\productChart;
use App\Models\Category;
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

    // get the products

    public function getProducts(){
        // get the data from the products table
        $products = Product::paginate(4);
        // get the categories
        $categories = Category::paginate(4);
        // after getting the data, return to the welcome page
        return view('welcome',compact('products','categories'));
    }

    public function findProduct($id){
        $item = Product::find($id);
        return view('pages.user.single-product',compact('item'));
    }


    public function productGraph(){
        $product = Product::all();
        $chart = new productChart;
        $chart->labels($product->pluck('name'));
        $chart->dataset('Products','bar',$product->pluck('price'));
        $chart2 = new productChart;
        $chart2->labels($product->pluck('name'));
        $chart2->dataset('Products','line',$product->pluck('price'));
        $chart3 = new productChart;
        $chart3->labels($product->pluck('name'));
        $chart3->dataset('Products','pie',$product->pluck('price'));
        $chart4 = new productChart;
        $chart4->labels($product->pluck('name'));
        $chart4->dataset('Products','doughnut',$product->pluck('price'));
        return view('pages.admin.product-analytics',compact('chart','chart2','chart3','chart4'));
    }

}

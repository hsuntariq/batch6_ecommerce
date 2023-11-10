<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(Request $req){
        $formFields = $req->validate([
            'name' => ['required'],
            'image' => ['required','mimes:jpg,jpeg,png']
        ]);

        $formFields['image'] = $req->file('image')->store('category_images','public');
        Category::create($formFields);
        return back()->with('message','Category Added Successfully!!!');

    }


    public function getCategory(){
        $categories = Category::all();
        return view('pages.admin.add-product',compact('categories'));
    }

}

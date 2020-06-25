<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
use App\Product;
use Storage;


class ProductController extends Controller
{


    public function index(){

        return view('product.index');
    }

    public function create()
    {
        return view('product.create');
    }
  
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:5',
            'contacts' => 'required|numeric|size:11',
            'price'=>'required|numeric',
            'product_type_id'=>'required|in:1,2,3',
            'category_id'=>'required'
        ], [
            'name.required' => 'Product Name is required',
            'description.required' => 'description is required',
            'description.min'=>'Please enter a vaild description ',
            'contacts.required' => 'please provide your phone number',
            'contacts.numeric'=>'invalid phone number',
            'contacts.size'=>'Please enter valid contact detail',
            'price.required' => 'Price is required',
            'price.numeric'=>'please provide a valid price'


           

        ]);

        $input= $request->all();
        $category_id= $input('category_id');
        Product::create($input);
    
        return redirect(route('product.index'))->with('success', 'Product created successfully.');
    }
}

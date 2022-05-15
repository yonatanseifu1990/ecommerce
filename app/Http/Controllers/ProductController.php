<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;
use App\Models\product;

class productController extends Controller
{
    public function register(Request $request){
    /*
    $product = product::create([
        'name' => 'ecommerce product',
        'unit' => '10',
        'price' => '50',
        'quantity' => '10',
        ]);
        echo 'product: ', $product->name; */
    return view('product.register');
    }
     function store(Request $request)
    {
        $product = new product();
        $product->name= $request->name;
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $is_saved = $product->save();

        if($is_saved){
            echo "Record saved successfully.";
            }
        else{
          echo "Sorry, try again something went wrong.";
             }
               
    }
    public function get_all()
    {
     $product = product::all();
     return view('product.get_all', compact('product'));
    }
    
   /* function get_all(){
        $product=product::all();
        return view('product.list' $product);
    }
*/
    
}
<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
class ProductController extends Controller
{
    //

    Public function FindProduct($id){
    	$product = Product::find($id);
    	$arr =array('product'=>$product); 
    	return view('product.view',$arr);
    }

    Public function ViewProduct(){
    	$product = Product::all();
    	$arr =array('product'=>$product); 
    	return view('product.view',$arr);
    }
 
    Public function AddProduct( Request $request){
        if($request->isMethod('post')){
            $newProduct = new Product();
            $newProduct->name = $request->input('name');
            $newProduct->price= $request->input('price');
            $newProduct->save();
        }
        return view('product.add');
    }
    
    Public function DeleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('product');
    }
    
    Public function EditProduct($id){
        return view('product.edit');
    }
}

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
}

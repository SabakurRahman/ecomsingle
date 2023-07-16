<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function addProduct(){

//        $product=Product::all();
//        dd($product);
        return view('admin.add-product');
    }
}

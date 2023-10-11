<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index(){
        $products = Product::all();
        return $products;
    }

    function show(Product $product){
        return $product;
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return $products;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $validator = Validator::make($request->all(),[
            'name'=>'unique:products'
        ]);
        if($validator->fails()){
            return response($validator->errors()->all(), 422);
        }
       
        $product = Product::create($request->all());
        return response($product,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $validator = Validator::make($request->all(),[
            'name'=>[ Rule::unique('products')->ignore($product->name),]
        ]);
        if($validator->fails()){
            return response($validator->errors()->all(), 422);
        }
       
        $product->update($request->all());
        return response($product,200);
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return 'deleted';
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    function __construct(){
        $this->middleware('auth:sanctum')->only('store');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        // return $products;
        return ProductResource::collection($products);
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
        // return response($product,201);
        return (new ProductResource($product))->response()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        // return $product;
        return new ProductResource($product);
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
        return new ProductResource($product);
        

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

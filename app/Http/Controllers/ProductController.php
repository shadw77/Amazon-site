<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    //
    function __construct(){
      $this->middleware('auth')->except(['index','show']);
    }


    function index(){
      $dbproducts = Product::paginate(3);         #Eloquent orm
      return view('Products.index',['products'=>$dbproducts]);
    }
 
    function show($id){
      $iproduct = Product::findorfail($id);
      return view('Products.show',['product'=>$iproduct]);

    }
    function delete($id){
      if (! Gate::allows('is-admin')) {
        abort(403);
    }

      $iproduct = Product::findorfail($id);
      $iproduct->delete();
      // return 'deleted';
      return to_route('products.index');

    }
    function create(){

      $categories = Category::all();
      return view('Products.create',['categories'=>$categories]);
    }
    function store(){

      \request()->validate(
        ["name"=>"required",
        "image"=>"unique:products",
        "description"=>"required|min:10"],[
          "name.requied"=>"Product name is required",
          "description.min"=>"Product description must be at least 10 chars."
        ]
      );
     
      $requestdata = \request()->all();
      $requestdata['creator_id'] = Auth::id();
    // dd(Product::create($requestdata));
      $product = Product::create($requestdata);
      // return to_route('products.show',$product->id);

    }
    function edit($id){
      $iproduct = Product::findorfail($id);
      $categories = Category::all();
      return view('Products.edit', ['product'=>$iproduct, 'categories'=>$categories]);

    }
    function update(Request $request, $id){
      // $categories = Category::all();

    
      $iproduct = Product::findorfail($id);
      $iproduct->name = $request->name;
      $iproduct->description =$request->input('description');
      $iproduct->price =$request->input('price');
      $iproduct->discountPercentage = $request->input('discountPercentage');
      $iproduct->rating = $request->input('rating');
      $iproduct->stock = $request->input('stock');
      $iproduct->brand = $request->input('brand');
      // $iproduct->category = $request->input('category');
      $iproduct->image = $request->input('image');

      $iproduct->update();
      return to_route('products.index');

      // return redirect()->back()->with('status','Product Updated Successfully');


    }
    function getProduct($id){    
        foreach($this->products as $prd){
            if($prd["id"]==$id){
                return view('landing',['products'=>$prd]);

            }
        }
        return abort(404);
    }

    function landingblade(){
        return view('landingb',['products'=>$this->products]);
    }
    function go_contact(){
        return view('contact');

    }
    
}

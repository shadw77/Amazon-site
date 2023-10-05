<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class ProductController extends Controller
{
    //
    private $students = [
            ["id"=>"1", "name"=>"Shadwa"],
            ["id"=>"2", "name"=>"Manal"],
            ["id"=>"3", "name"=>"Yara"],
    
        ];
    private $products = [
          [
            "id"=> 1,
            "title"=> "iPhone 9",
            "description"=> "An apple mobile which is nothing like apple",
            "price"=> 549,
            "discountPercentage"=> 12.96,
            "rating"=> 4.69,
            "stock"=> 94,
            "brand"=> "Apple",
            "category"=> "smartphones",
            "thumbnail"=> "thumbnail1.jpg",
           
          ],
          [
            "id"=> 2,
            "title"=> "iPhone X",
            "description"=> "SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...",
            "price"=> 899,
            "discountPercentage"=> 17.94,
            "rating"=> 4.44,
            "stock"=> 34,
            "brand"=> "Apple",
            "category"=> "smartphones",
            "thumbnail"=> "thumbnail2.jpg",
          
          ],
          [
            "id"=> 3,
            "title"=> "Samsung Universe 9",
            "description"=> "Samsung's new variant which goes beyond Galaxy to the Universe",
            "price"=> 1249,
            "discountPercentage"=> 15.46,
            "rating"=> 4.09,
            "stock"=> 36,
            "brand"=> "Samsung",
            "category"=> "smartphones",
            "thumbnail"=> "thumbnail3.jpg",
       
          ],
          [
            "id"=> 4,
            "title"=> "OPPOF19",
            "description"=> "OPPO F19 is officially announced on April 2021.",
            "price"=> 280,
            "discountPercentage"=> 17.91,
            "rating"=> 4.3,
            "stock"=> 123,
            "brand"=> "OPPO",
            "category"=> "smartphones",
            "thumbnail"=> "thumbnail4.jpg",
        
          ],
          [
            "id"=> 5,
            "title"=> "Huawei P30",
            "description"=> "Huawei’s re-badged P30 Pro New Edition was officially unveiled yesterday in Germany and now the device has made its way to the UK.",
            "price"=> 499,
            "discountPercentage"=> 10.58,
            "rating"=> 4.09,
            "stock"=> 32,
            "brand"=> "Huawei",
            "category"=> "smartphones",
            "thumbnail"=> "thumbnail5.jpg",
        
          ],
          [
            "id"=> 6,
            "title"=> "MacBook Pro",
            "description"=> "MacBook Pro 2021 with mini-LED display may launch between September, November",
            "price"=> 1749,
            "discountPercentage"=> 11.02,
            "rating"=> 4.57,
            "stock"=> 0,
            "brand"=> "Apple",
            "category"=> "laptops",
            "thumbnail"=> "thumbnail6.png"
        
          ]
    ];  
    function index(){
      $dbproducts = Product::paginate(3);         #Eloquent orm
      // return $dbproducts;
      return view('Products.index',['products'=>$dbproducts]);
    }
    // function index_db():View{
  
      // $iproducts = DB::table('products')->paginate(3);
      //       return view('Products.index',compact('iproducts'));
      // return view('Products.index',['products'=>$iproducts]);

    // }
    function show($id){
      $iproduct = Product::findorfail($id);
      return view('Products.show',['product'=>$iproduct]);

    }
    function delete($id){
      $iproduct = Product::findorfail($id);
      $iproduct->delete();
      // return 'deleted';
      return to_route('products.index');

    }
    function create(){
      return view('Products.create');
    }
    function store(){
      // dd('data recieved');
      $data = \request();
      $name = \request()->get('name');
      $description = \request()->get('description');
      $price = \request()->get('price');
      $DiscountPercentage = \request()->get('DiscountPercentage');
      $rating = \request()->get('rating');
      $stock = \request()->get('stock');
      $brand = \request()->get('brand');
      $category = \request()->get('category');
      $image = \request()->get('image');

      $product = new Product();
      $product->name = $name;
      $product->description = $description;
      $product->price = $price;
      $product->discountPercentage = $DiscountPercentage;
      $product->rating = $rating;
      $product->stock = $stock;
      $product->brand = $brand;
      $product->category = $category;
      $product->image = $image;

      $product->save();
      // return to_route('products.index');
      return to_route('products.show',$product->id);

    }
    function edit($id){
      $iproduct = Product::findorfail($id);
      return view('Products.edit', ['product'=>$iproduct]);

    }
    function update(Request $request, $id){
    
      $iproduct = Product::findorfail($id);
      $iproduct->name = $request->name;
      $iproduct->description =$request->input('description');
      $iproduct->price =$request->input('price');
      $iproduct->discountPercentage = $request->input('DiscountPercentage');
      $iproduct->rating = $request->input('rating');
      $iproduct->stock = $request->input('stock');
      $iproduct->brand = $request->input('brand');
      $iproduct->category = $request->input('category');
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

@extends('layouts.app')
@section('content')
 <h1>Product Details of {{$product->name}}</h1>
 <div class='card mb-3'>
        <img src="{{asset('images/' . $product->image)}}" class='card-img-top w-25 rounded mx-auto'>
            <div class='card-body'>
            <div class='body'>
            <table class='table table-dark'>
            <tr><th>Title</th><th><h5 class='card-title'>{{$product->name}}</h5></th></tr>
            <tr><th>Description</th><th><p class='card-text'> {{$product->description}}</p></th></tr>
            <tr><th>Price</th><th><p class='card-text'> {{$product->price}}</p></th></tr>
            <tr><th>DiscountPercentage</th><th><p class='card-text'> {{$product->discountPercentage}}</p></th></tr>
            <tr><th>Rating</th><th><p class='card-text'> {{$product->rating}}</p></th></tr>
            <tr><th>Stock</th><th><p class='card-text'>{{$product->stock}}</p></th></tr>
            <tr><th>Brand</th><th><p class='card-text'>{{$product->brand}}</p></th></tr>
            <!-- <tr><th>Category</th><th><p class='card-text'> {{$product->category_id}}</p></th></tr> -->
            @if($product->category)
            <tr><th>Category  </th><th><p class='card-text'><a href="{{ route('categories.show', $product->category->id)}}">{{$product->category->name}}</a> </p></th></tr>
            @else
            <tr><th>Category  </th><th></th></tr>
            @endif

            </table>
            <a href="{{route('products.index')}}" class="btn btn-primary">Back to all products</a>
         
            </div>
            </div>
        </div>
  

@endsection
@extends('layouts.app')
@section('content')

  
        <div class='card mb-3'>
        <img src="{{asset('images/' . $products['thumbnail'])}}" class='card-img-top w-25 rounded mx-auto'>
            <div class='card-body'>
            <div class='body'>
            <table class='table table-dark'>
            <tr><th>Title</th><th><h5 class='card-title'>{{$products['title']}}</h5></th></tr>
            <tr><th>Description</th><th><p class='card-text'> {{$products['description']}}</p></th></tr>
            <tr><th>Price</th><th><p class='card-text'> {{$products['price']}}</p></th></tr>
            <tr><th>DiscountPercentage</th><th><p class='card-text'> {{$products['discountPercentage']}}</p></th></tr>
            <tr><th>Rating</th><th><p class='card-text'> {{$products['rating']}}</p></th></tr>
            <tr><th>Stock</th><th><p class='card-text'>{{$products['stock']}}</p></th></tr>
            <tr><th>Brand</th><th><p class='card-text'>{{$products['brand']}}</p></th></tr>
            <tr><th>Category</th><th><p class='card-text'> {{$products['category']}}</p></th></tr>

            </table>
         
            </div>
            </div>
        </div>
  

@endsection

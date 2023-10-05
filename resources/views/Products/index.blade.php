@extends('layouts.app')
@section('content')
<a href="{{route('products.create')}}" class="btn btn-success">Add New Product </a>
 <h1>All Products from db</h1>
 <div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($products as $product)
  <div class="col">
    <div class="card w-100 " style="height:400px">
      <img src="{{asset('images/'.$product->image)}}" class="card-img-top img-fluid h-50 " heigh="200" >
      <div class="card-body">
        <div class="row">
            <div class="col">
                        <h5 class="card-title">{{$product->name}}</h5>
            </div>
            <div class="col">
                        <h5 class="card-title text-danger">{{$product->price}} EGP</h5>

            </div>

        </div>

        <p class="card-text"> {{$product->description}}</p>
       
            <a href="{{route('products.show', $product->id)}}" class="btn btn-info">See More</a> 
            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Update</a> 
            <a href="{{route('products.delete', $product->id)}}" class="btn btn-danger">Delete</a> 

        </div>
        </div>

    </div>
  @endforeach
  {{$products->links()}}

</div>
@endsection
@extends('layouts.app')
@section('content')
<h1 class="ms-5 mb-5">Create New Product</h1>
<div class="container">
<form method="post" action="{{route('product.update', ['id'=>$product->id]) }}">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Product Name</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input  class="form-control" name="image" value="{{$product->image}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input  class="form-control" name="description" value="{{$product->description}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input  class="form-control" name="price" value="{{$product->price}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Rating</label>
    <input  class="form-control" name="rating" value="{{$product->rating}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">DiscountPercentage</label>
    <input  class="form-control" name="discountPercentage" value="{{$product->discountPercentage}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Stock</label>
    <input  class="form-control" name="stock" value="{{$product->stock}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Brand</label>
    <input  class="form-control" name="brand" value="{{$product->brand}}">
  </div>

  <!-- <div class="mb-3">
    <label for="" class="form-label">Category</label>
  <select class="form-select" name="category">
    <option selected disabled value="" >Open this select menu</option>
    @foreach($categories as $category)
    <option value="{{$category->id}}" >{{$category->name}}</option>
    @endforeach
  </select>
  </div>
  -->
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection